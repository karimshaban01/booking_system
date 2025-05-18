-- Create the database
CREATE DATABASE IF NOT EXISTS kasulubooking;
USE kasulubooking;

-- Users table
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Cities/Stations table
CREATE TABLE stations (
    station_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100),
    country VARCHAR(100) NOT NULL,
    address TEXT,
    coordinates POINT,
    is_active BOOLEAN DEFAULT TRUE
);

-- Buses table
CREATE TABLE buses (
    bus_id INT PRIMARY KEY AUTO_INCREMENT,
    bus_number VARCHAR(20) UNIQUE NOT NULL,
    bus_type ENUM('Standard', 'Premium', 'Business') NOT NULL,
    total_seats INT NOT NULL,
    amenities JSON,
    is_active BOOLEAN DEFAULT TRUE
);

-- Routes table
CREATE TABLE routes (
    route_id INT PRIMARY KEY AUTO_INCREMENT,
    departure_station INT,
    arrival_station INT,
    distance DECIMAL(10,2),
    estimated_duration INT, -- in minutes
    base_price DECIMAL(10,2) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    base_fare DECIMAL(10,2) NOT NULL DEFAULT 0.00 COMMENT 'Basic fare for the route',
    peak_fare_multiplier DECIMAL(3,2) DEFAULT 1.20 COMMENT 'Multiplier for peak hours',
    weekend_fare_multiplier DECIMAL(3,2) DEFAULT 1.15 COMMENT 'Multiplier for weekend travel',
    FOREIGN KEY (departure_station) REFERENCES stations(station_id),
    FOREIGN KEY (arrival_station) REFERENCES stations(station_id)
);

-- Schedules table
CREATE TABLE schedules (
    schedule_id INT PRIMARY KEY AUTO_INCREMENT,
    route_id INT,
    bus_id INT,
    departure_time DATETIME NOT NULL,
    arrival_time DATETIME NOT NULL,
    available_seats INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    status ENUM('Scheduled', 'Departed', 'Arrived', 'Cancelled') DEFAULT 'Scheduled',
    base_fare DECIMAL(10,2) NOT NULL COMMENT 'Base fare for this schedule',
    final_fare DECIMAL(10,2) GENERATED ALWAYS AS (base_fare * 
        CASE 
            WHEN HOUR(departure_time) BETWEEN 6 AND 9 THEN 1.20  -- Peak hours
            WHEN HOUR(departure_time) BETWEEN 22 AND 23 THEN 0.90 -- Night travel
            ELSE 1.00
        END) STORED COMMENT 'Final calculated fare',
    FOREIGN KEY (route_id) REFERENCES routes(route_id),
    FOREIGN KEY (bus_id) REFERENCES buses(bus_id)
);

-- Ticket types table
CREATE TABLE ticket_types (
    ticket_type_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    price_multiplier DECIMAL(3,2) DEFAULT 1.00,
    features JSON,
    is_active BOOLEAN DEFAULT TRUE
);

-- Bookings table
CREATE TABLE bookings (
    booking_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    schedule_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10,2) NOT NULL,
    status ENUM('Pending', 'Confirmed', 'Cancelled', 'Completed') DEFAULT 'Pending',
    payment_status ENUM('Pending', 'Paid', 'Refunded', 'Failed') DEFAULT 'Pending',
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (schedule_id) REFERENCES schedules(schedule_id)
);

-- Passengers table
CREATE TABLE passengers (
    passenger_id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT,
    id_type ENUM('Passport', 'National ID', 'Driving License'),
    id_number VARCHAR(50),
    seat_number VARCHAR(10),
    ticket_type_id INT,
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id),
    FOREIGN KEY (ticket_type_id) REFERENCES ticket_types(ticket_type_id)
);

-- Payments table
CREATE TABLE payments (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    amount DECIMAL(10,2) NOT NULL,
    payment_method ENUM('Credit Card', 'Debit Card', 'PayPal', 'Bank Transfer'),
    transaction_id VARCHAR(100),
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Pending', 'Success', 'Failed', 'Refunded') DEFAULT 'Pending',
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id)
);

-- Seat layout table
CREATE TABLE seat_layouts (
    layout_id INT PRIMARY KEY AUTO_INCREMENT,
    bus_id INT,
    seat_number VARCHAR(10),
    seat_type ENUM('Standard', 'Premium', 'Business'),
    is_available BOOLEAN DEFAULT TRUE,
    position_x INT,
    position_y INT,
    FOREIGN KEY (bus_id) REFERENCES buses(bus_id)
);

-- Promotional offers table
CREATE TABLE promotions (
    promo_id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(20) UNIQUE NOT NULL,
    description TEXT,
    discount_type ENUM('Percentage', 'Fixed') NOT NULL,
    discount_value DECIMAL(10,2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    min_booking_amount DECIMAL(10,2),
    max_discount DECIMAL(10,2),
    usage_limit INT,
    used_count INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE
);

-- Fare rules table
CREATE TABLE fare_rules (
    rule_id INT PRIMARY KEY AUTO_INCREMENT,
    route_id INT,
    season_type ENUM('Regular', 'Peak', 'Off-Peak', 'Holiday') DEFAULT 'Regular',
    day_type ENUM('Weekday', 'Weekend', 'Holiday') DEFAULT 'Weekday',
    time_slot VARCHAR(50) COMMENT 'e.g., "06:00-10:00"',
    multiplier DECIMAL(3,2) DEFAULT 1.00,
    start_date DATE,
    end_date DATE,
    is_active BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (route_id) REFERENCES routes(route_id)
);

-- Fare history table
CREATE TABLE fare_history (
    history_id INT PRIMARY KEY AUTO_INCREMENT,
    route_id INT,
    old_fare DECIMAL(10,2),
    new_fare DECIMAL(10,2),
    change_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    change_reason TEXT,
    changed_by INT,
    FOREIGN KEY (route_id) REFERENCES routes(route_id),
    FOREIGN KEY (changed_by) REFERENCES users(user_id)
);

-- Insert sample data for testing
INSERT INTO ticket_types (name, description, price_multiplier, features) VALUES
('Standard', 'Basic ticket with essential amenities', 1.00, '{"baggage": "1 piece", "seat_selection": false}'),
('Premium', 'Enhanced comfort with extra benefits', 1.25, '{"baggage": "2 pieces", "seat_selection": true, "refreshments": true}'),
('Business', 'Luxury travel experience', 1.50, '{"baggage": "3 pieces", "seat_selection": true, "refreshments": true, "priority_boarding": true}');

INSERT INTO fare_rules (route_id, season_type, day_type, time_slot, multiplier) VALUES
(1, 'Peak', 'Weekday', '06:00-10:00', 1.20),
(1, 'Peak', 'Weekday', '16:00-20:00', 1.20),
(1, 'Off-Peak', 'Weekday', '10:00-16:00', 1.00),
(1, 'Off-Peak', 'Weekday', '20:00-06:00', 0.90),
(1, 'Peak', 'Weekend', '08:00-20:00', 1.15);

-- Create indexes for better performance
CREATE INDEX idx_schedules_departure ON schedules(departure_time);
CREATE INDEX idx_bookings_status ON bookings(status);
CREATE INDEX idx_payments_status ON payments(status);
CREATE INDEX idx_routes_stations ON routes(departure_station, arrival_station);
CREATE INDEX idx_schedule_departure_hour ON schedules((HOUR(departure_time)));
CREATE INDEX idx_fare_rules_active ON fare_rules(is_active);