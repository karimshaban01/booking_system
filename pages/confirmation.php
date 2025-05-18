<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/confirmation-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .confirmation-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .confirmation-banner {
            background-color: var(--secondary);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
        }

        .booking-details {
            background-color: var(--light);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .label {
            color: var(--gray);
            font-weight: 500;
        }

        .value {
            color: var(--dark);
            font-weight: 600;
        }

        .ticket-actions {
            display: flex;
            gap: 15px;
            margin: 30px 0;
        }

        .important-info {
            background-color: #fff8e1;
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 30px 0;
            border-radius: 4px;
        }

        .important-info h4 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .important-info ul {
            list-style: none;
            padding: 0;
        }

        .important-info li {
            margin-bottom: 8px;
            color: var(--gray);
            padding-left: 20px;
            position: relative;
        }

        .important-info li::before {
            content: '•';
            color: var(--primary);
            position: absolute;
            left: 0;
        }

        @media (max-width: 768px) {
            .confirmation-container {
                margin: 0 20px;
            }

            .ticket-actions {
                flex-direction: column;
            }

            .detail-row {
                flex-direction: column;
                gap: 5px;
            }

            .value {
                padding-left: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Standard Header for all pages -->
<header>
    <div class="container">
        <nav>
            <a href="/" class="logo">Easy<span>Bus</span></a>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/routes">Routes</a>
                <a href="/offers">Offers</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contact</a>
            </div>
            <div class="auth-buttons">
                <a href="/auth/login" class="btn btn-outline">Sign In</a>
                <a href="/auth/register" class="btn btn-primary">Register</a>
            </div>
        </nav>
    </div>
</header>

    <section class="sub-hero">
        <div class="container">
            <h1>Booking Confirmation</h1>
            <p>Your journey is confirmed and ready to go!</p>
        </div>
    </section>

    <div class="confirmation-container">
        <div class="confirmation-banner">
            <h2>Booking Confirmed!</h2>
            <p>Your ticket has been successfully booked.</p>
        </div>
        
        <div class="booking-details">
            <h3>Booking Reference: <span id="booking-id">BC78945612</span></h3>
            
            <div class="detail-row">
                <span class="label">Journey</span>
                <span class="value">New York to Boston</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Date</span>
                <span class="value">May 15, 2025</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Departure Time</span>
                <span class="value">08:30 AM</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Arrival Time</span>
                <span class="value">01:45 PM</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Departure Terminal</span>
                <span class="value">New York Central Bus Terminal, Gate 12</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Arrival Terminal</span>
                <span class="value">Boston South Station, Terminal B</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Passenger Name</span>
                <span class="value">John Smith</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Seat Number</span>
                <span class="value">23B (Window)</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Ticket Type</span>
                <span class="value">Adult Standard</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Luggage Allowance</span>
                <span class="value">1 x 20kg Suitcase + 1 Hand Luggage</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Amount Paid</span>
                <span class="value">$45.99</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Payment Method</span>
                <span class="value">Credit Card (ending 4567)</span>
            </div>
        </div>
        
        <div class="ticket-actions">
            <a href="#" class="btn btn-primary">Download E-Ticket</a>
            <a href="#" class="btn btn-outline">Add to Calendar</a>
            <a href="#" class="btn btn-outline">Manage Booking</a>
        </div>
        
        <div class="important-info">
            <h4>Important Information</h4>
            <ul>
                <li>Please arrive at least 30 minutes before departure time.</li>
                <li>Keep this confirmation email as proof of booking.</li>
                <li>You can either print your ticket or show the digital version.</li>
                <li>Valid photo ID is required when boarding.</li>
                <li>Check-in closes 10 minutes before departure.</li>
            </ul>
        </div>
        
        <div class="important-info">
            <h4>Need Help?</h4>
            <p>If you have any questions or need assistance, please contact our customer support:</p>
            <p>Email: support@busconnect.com</p>
            <p>Phone: 1-800-BUS-HELP (1-800-287-4357)</p>
            <p>Hours: 24/7 Customer Support</p>
        </div>
    </div>
    
    <!-- Copy footer from index.php -->
    <footer>
        <!-- ...existing footer code... -->
    </footer>

    <script>
        // You could add JavaScript here to:
        // 1. Dynamically populate booking details from URL parameters or API
        // 2. Enable download functionality
        // 3. Add calendar integration
        // 4. Handle ticket QR code display
        
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Set current booking details from session storage or API
            // In a real implementation, this would come from your booking database
            const bookingDetails = {
                bookingId: "BC" + Math.floor(10000000 + Math.random() * 90000000),
                journey: "New York to Boston",
                date: "May 15, 2025",
                departureTime: "08:30 AM",
                arrivalTime: "01:45 PM",
                passengerName: "John Smith",
                seatNumber: "23B"
            };
            
            // Update the booking ID
            document.getElementById('booking-id').textContent = bookingDetails.bookingId;
            
            // Add event listeners for the buttons
            document.querySelector('.btn-primary').addEventListener('click', function(e) {
                e.preventDefault();
                alert('E-Ticket download started. You will receive the PDF shortly.');
                // In a real implementation, this would trigger the ticket download
            });
        });
    </script>
</body>
</html>