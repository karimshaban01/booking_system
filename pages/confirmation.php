<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - BusConnect</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #0066cc;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .confirmation-banner {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
            border-radius: 4px;
            margin-bottom: 2rem;
        }
        
        .booking-details {
            border: 1px solid #ddd;
            padding: 1.5rem;
            border-radius: 4px;
            margin-bottom: 2rem;
        }
        
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #eee;
        }
        
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .label {
            font-weight: 600;
            color: #555;
        }
        
        .value {
            text-align: right;
        }
        
        .ticket-actions {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-primary {
            background-color: #0066cc;
            color: white;
        }
        
        .btn-secondary {
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ddd;
        }
        
        .important-info {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 1rem;
            margin-top: 2rem;
        }
        
        .footer {
            text-align: center;
            padding: 1rem;
            color: #777;
            font-size: 0.875rem;
            margin-top: 2rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
                margin: 1rem;
            }
            
            .detail-row {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .value {
                text-align: left;
                margin-top: 0.25rem;
            }
            
            .ticket-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>BusConnect</h1>
    </div>
    
    <div class="container">
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
        
        <div class="ticket-actions">
            <a href="#" class="btn btn-primary">Download E-Ticket</a>
            <a href="#" class="btn btn-secondary">Manage Booking</a>
            <a href="#" class="btn btn-secondary">Add to Calendar</a>
        </div>
        
        <div class="important-info">
            <h4>Need Help?</h4>
            <p>If you have any questions or need assistance, please contact our customer support:</p>
            <p>Email: support@busconnect.com</p>
            <p>Phone: 1-800-BUS-HELP (1-800-287-4357)</p>
            <p>Hours: 24/7 Customer Support</p>
        </div>
    </div>
    
    <div class="footer">
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
        <p><a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Refund Policy</a></p>
    </div>

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