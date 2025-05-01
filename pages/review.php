<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusConnect - Review Booking</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: #333;
        }
        header {
            background-color: #0056b3;
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin: 1rem auto;
            max-width: 800px;
            padding: 0 1rem;
        }
        .step {
            text-align: center;
            flex: 1;
        }
        .step-number {
            background-color: #ddd;
            color: #777;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 0 auto;
            font-weight: bold;
        }
        .active .step-number {
            background-color: #0056b3;
            color: white;
        }
        .completed .step-number {
            background-color: #28a745;
            color: white;
        }
        .step-label {
            margin-top: 5px;
            font-size: 0.85rem;
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-title {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }
        .btn {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #003d82;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }
        .card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid #dee2e6;
        }
        .card-title {
            margin-top: 0;
            color: #0056b3;
            font-size: 1.25rem;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .bus-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .detail-item {
            margin-bottom: 0.5rem;
        }
        .detail-label {
            font-weight: bold;
            color: #495057;
        }
        .passenger-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .passenger-item {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .passenger-item:last-child {
            border-bottom: none;
        }
        .passenger-name {
            font-weight: bold;
        }
        .seat-info {
            color: #0056b3;
            font-weight: 600;
        }
        .price-summary {
            margin-top: 1rem;
        }
        .price-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .price-total {
            border-top: 2px solid #dee2e6;
            font-weight: bold;
            padding-top: 10px;
            margin-top: 10px;
        }
        .alert {
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
        .checkbox-container {
            margin: 1.5rem 0;
        }
        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.5rem;
        }
        .checkbox-item input {
            margin-top: 5px;
            margin-right: 10px;
        }
        .edit-link {
            color: #0056b3;
            text-decoration: none;
            font-size: 0.9rem;
            margin-left: 10px;
        }
        .edit-link:hover {
            text-decoration: underline;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #f0f0f0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>BusConnect</h1>
    </header>
    
    <div class="progress-bar">
        <div class="step completed">
            <div class="step-number">1</div>
            <div class="step-label">Search</div>
        </div>
        <div class="step completed">
            <div class="step-number">2</div>
            <div class="step-label">Select Bus</div>
        </div>
        <div class="step completed">
            <div class="step-number">3</div>
            <div class="step-label">Passenger Info</div>
        </div>
        <div class="step completed">
            <div class="step-number">4</div>
            <div class="step-label">Select Seats</div>
        </div>
        <div class="step active">
            <div class="step-number">5</div>
            <div class="step-label">Review</div>
        </div>
        <div class="step">
            <div class="step-number">6</div>
            <div class="step-label">Payment</div>
        </div>
        <div class="step">
            <div class="step-number">7</div>
            <div class="step-label">Confirmation</div>
        </div>
    </div>

    <div class="container">
        <h2 class="form-title">Review Your Booking</h2>
        
        <div class="alert alert-warning">
            Please carefully review all the booking details below before proceeding to payment.
        </div>
        
        <div class="card">
            <h3 class="card-title">Journey Details <a href="#" class="edit-link">Edit</a></h3>
            <div class="bus-details">
                <div class="detail-item">
                    <div class="detail-label">From:</div>
                    <div>New York, NY</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">To:</div>
                    <div>Boston, MA</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Date:</div>
                    <div>May 15, 2025</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Time:</div>
                    <div>09:30 AM</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Bus Operator:</div>
                    <div>Express Lines</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Bus Type:</div>
                    <div>Luxury Coach</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Duration:</div>
                    <div>4h 30m</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Arrival:</div>
                    <div>02:00 PM</div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <h3 class="card-title">Passenger Details <a href="#" class="edit-link">Edit</a></h3>
            <ul class="passenger-list">
                <li class="passenger-item">
                    <div class="passenger-name">John Smith</div>
                    <div>Adult | Age: 35 | ID: Passport | <span class="seat-info">Seat 9</span></div>
                </li>
                <li class="passenger-item">
                    <div class="passenger-name">Jane Smith</div>
                    <div>Adult | Age: 32 | ID: Passport | <span class="seat-info">Seat 10</span></div>
                </li>
            </ul>
        </div>
        
        <div class="card">
            <h3 class="card-title">Contact Information <a href="#" class="edit-link">Edit</a></h3>
            <div class="bus-details">
                <div class="detail-item">
                    <div class="detail-label">Email:</div>
                    <div>john.smith@example.com</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Phone:</div>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <h3 class="card-title">Price Details</h3>
            <div class="price-summary">
                <div class="price-row">
                    <span>2 x Standard Seats</span>
                    <span>$90.00</span>
                </div>
                <div class="price-row">
                    <span>Booking Fee</span>
                    <span>$5.00</span>
                </div>
                <div class="price-row price-total">
                    <span>Total</span>
                    <span>$95.00</span>
                </div>
            </div>
        </div>
        
        <div class="checkbox-container">
            <div class="checkbox-item">
                <input type="checkbox" id="terms">
                <label for="terms">I accept the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" id="info-correct">
                <label for="info-correct">I confirm that all the information provided is correct and matches the ID documents that will be presented during travel</label>
            </div>
        </div>
        
        <div class="alert alert-info">
            <strong>Note:</strong> Your booking is not confirmed until payment is successfully processed.
        </div>
        
        <div class="buttons">
            <button class="btn btn-secondary">Back</button>
            <button class="btn">Proceed to Payment</button>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
    </footer>
</body>
</html>