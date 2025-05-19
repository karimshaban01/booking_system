<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/payment-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .payment-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .step {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--light-gray);
            color: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 8px;
            font-weight: bold;
        }

        .step.completed .step-number {
            background-color: var(--secondary);
            color: white;
        }

        .step.active .step-number {
            background-color: var(--primary);
            color: white;
        }

        .booking-summary {
            background-color: var(--light);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .price-total {
            border-top: 2px solid var(--primary);
            border-bottom: none;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 15px;
            padding-top: 15px;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .payment-method {
            border: 2px solid var(--light-gray);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .payment-method:hover {
            border-color: var(--primary);
            background-color: rgba(26, 115, 232, 0.04);
        }

        .payment-method.selected {
            border-color: var(--primary);
            background-color: #e6f2ff;
        }

        .secure-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: var(--secondary);
            margin: 30px 0;
            font-weight: 500;
        }

        .timer {
            background-color: #fff8e1;
            color: var(--primary-dark);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .card-inputs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--gray);
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            border-color: var(--primary);
            outline: none;
        }

        @media (max-width: 768px) {
            .payment-container {
                margin: 0 20px;
            }
            .card-inputs {
                grid-template-columns: 1fr;
            }
            .buttons {
                flex-direction: column;
                gap: 15px;
            }
            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
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
            <h1>Secure Payment</h1>
            <p>Complete your booking with our secure payment system</p>
        </div>
    </section>

    <div class="payment-container">
        <!-- Progress Steps -->
        <div class="progress-steps">
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

        <div class="timer">
            ⏱️ Time remaining to complete payment: <strong>14:59</strong>
        </div>

        <!-- Booking Summary -->
        <div class="booking-summary">
            <h3>Booking Summary</h3>
            <div class="price-row">
                <span>Journey</span>
                <span>New York → Boston</span>
            </div>
            <div class="price-row">
                <span>Date & Time</span>
                <span>May 15, 2025 at 09:30 AM</span>
            </div>
            <div class="price-row">
                <span>Passengers</span>
                <span>2 Adults</span>
            </div>
            <div class="price-row">
                <span>Seats</span>
                <span>9, 10</span>
            </div>
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

        <!-- Payment Methods -->
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

        <!-- Payment Form -->
        <form class="payment-form">
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
        </form>

        <div class="secure-badge">
            <span>🔒</span>
            <span>Secure Payment - Your data is encrypted and protected</span>
        </div>

        <div class="buttons">
            <a href="./review.php" class="btn btn-outline">Back</a>
            <a href="./confirmation.php" class="btn btn-primary">Pay $95.00</a>
            <!-- <button type="submit" class="btn btn-primary"></button> -->
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>EasyBus</h3>
                    <p>Making bus travel simple and comfortable.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <a href="/">Home</a>
                    <a href="/routes">Routes</a>
                    <a href="/offers">Offers</a>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact</a>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <a href="/faq">FAQ</a>
                    <a href="/terms">Terms of Service</a>
                    <a href="/privacy">Privacy Policy</a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 EasyBus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>