<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusConnect - Payment</title>
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
        .btn-success {
            background-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
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
        .payment-methods {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .payment-method {
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem;
            width: calc(50% - 0.5rem);
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .payment-method:hover {
            border-color: #adb5bd;
            background-color: #e9ecef;
        }
        .payment-method.selected {
            border-color: #0056b3;
            background-color: #e6f2ff;
        }
        .payment-icon {
            width: 50px;
            height: 30px;
            background-color: #6c757d;
            margin-right: 10px;
            border-radius: 4px;
        }
        .payment-form {
            margin-top: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        .card-inputs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .secure-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1.5rem;
            color: #28a745;
            font-weight: 600;
        }
        .secure-icon {
            margin-right: 8px;
            font-size: 1.2rem;
        }
        .alert {
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
        .timer {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #dc3545;
            font-weight: bold;
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
        <div class="step completed">
            <div class="step-number">5</div>
            <div class="step-label">Review</div>
        </div>
        <div class="step active">
            <div class="step-number">6</div>
            <div class="step-label">Payment</div>
        </div>
        <div class="step">
            <div class="step-number">7</div>
            <div class="step-label">Confirmation</div>
        </div>
    </div>

    <div class="container">
        <h2 class="form-title">Secure Payment</h2>
        
        <div class="timer">
            Time remaining to complete payment: 14:59
        </div>
        
        <div class="card">
            <h3 class="card-title">Booking Summary</h3>
            <div>
                <p><strong>Journey:</strong> New York, NY to Boston, MA</p>
                <p><strong>Date & Time:</strong> May 15, 2025 at 09:30 AM</p>
                <p><strong>Passengers:</strong> 2 Adults</p>
                <p><strong>Seats:</strong> 9, 10</p>
            </div>
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
        
        <h3>Select Payment Method</h3>
        
        <div class="payment-methods">
            <div class="payment-method selected">
                <div class="payment-icon"></div>
                <span>Credit/Debit Card</span>
            </div>
            <div class="payment-method">
                <div class="payment-icon"></div>
                <span>PayPal</span>
            </div>
            <div class="payment-method">
                <div class="payment-icon"></div>
                <span>Apple Pay</span>
            </div>
            <div class="payment-method">
                <div class="payment-icon"></div>
                <span>Google Pay</span>
            </div>
        </div>
        
        <div class="payment-form">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="1234 5678 9012 3456">
            </div>
            
            <div class="form-group">
                <label for="card-name">Cardholder Name</label>
                <input type="text" id="card-name" placeholder="John Smith">
            </div>
            
            <div class="card-inputs">
                <div class="form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY">
                </div>
                
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" placeholder="123">
                </div>
            </div>
            
            <div class="form-group">
                <label for="billing-address">Billing Address</label>
                <input type="text" id="billing-address" placeholder="123 Main St">
            </div>
            
            <div class="card-inputs">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="New York">
                </div>
                
                <div class="form-group">
                    <label for="zip">ZIP/Postal Code</label>
                    <input type="text" id="zip" placeholder="10001">
                </div>
            </div>
            
            <div class="form-group">
                <label for="country">Country</label>
                <select id="country">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                    <option value="au">Australia</option>
                </select>
            </div>
        </div>
        
        <div class="secure-badge">
            <span class="secure-icon">🔒</span>
            <span>Secure Payment - Your data is encrypted and protected</span>
        </div>
        
        <div class="alert alert-info">
            <strong>Note:</strong> Your booking will be confirmed immediately after successful payment.
        </div>
        
        <div class="buttons">
            <button class="btn btn-secondary">Back</button>
            <button class="btn btn-success">Pay $95.00</button>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
    </footer>
</body>
</html>