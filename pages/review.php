<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Booking - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/review-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .review-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .card {
            background-color: var(--light);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .card-title {
            color: var(--primary);
            font-size: 1.25rem;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bus-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-item {
            margin-bottom: 15px;
        }

        .detail-label {
            font-weight: 500;
            color: var(--gray);
            margin-bottom: 5px;
        }

        .passenger-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .passenger-item {
            padding: 15px;
            border-bottom: 1px solid var(--light-gray);
        }

        .passenger-item:last-child {
            border-bottom: none;
        }

        .passenger-name {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .seat-info {
            color: var(--primary);
            font-weight: 500;
        }

        .price-summary {
            margin-top: 20px;
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

        .checkbox-container {
            margin: 30px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .checkbox-item input {
            margin-top: 5px;
            margin-right: 10px;
        }

        .edit-link {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .review-container {
                margin: 0 20px;
            }

            .bus-details {
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
            <h1>Review Your Booking</h1>
            <p>Please review all details before proceeding to payment</p>
        </div>
    </section>

    <div class="review-container">
        <!-- Progress Bar -->
        <div class="progress-bar">
            <!-- ... existing progress bar code ... -->
        </div>

        <div class="alert alert-warning">
            Please carefully review all the booking details below before proceeding to payment.
        </div>

        <!-- Journey Details -->
        <div class="card">
            <h3 class="card-title">
                Journey Details 
                <a href="#" class="edit-link">Edit</a>
            </h3>
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

        <!-- Passenger Details -->
        <div class="card">
            <h3 class="card-title">
                Passenger Details
                <a href="#" class="edit-link">Edit</a>
            </h3>
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

        <!-- Contact Information -->
        <div class="card">
            <h3 class="card-title">
                Contact Information
                <a href="#" class="edit-link">Edit</a>
            </h3>
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

        <!-- Price Details -->
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

        <!-- Terms Checkboxes -->
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
            <a href="/seats" class="btn btn-outline">Back</a>
            <a href="/payment" class="btn btn-primary">Proceed to Payment</a>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <!-- ... copy footer content from index.php ... -->
            </div>
            <div class="copyright">
                <p>&copy; 2025 EasyBus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>