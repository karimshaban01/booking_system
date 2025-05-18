<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Information - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/passenger-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .passenger-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin: 30px auto;
            max-width: 800px;
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

        .step.active .step-number {
            background-color: var(--primary);
            color: white;
        }

        .step.completed .step-number {
            background-color: var(--secondary);
            color: white;
        }

        .passenger-card {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-left: 4px solid var(--primary);
        }

        .passenger-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--light-gray);
        }

        .passenger-header h3 {
            color: var(--dark);
            font-size: 1.2rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
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

        .required {
            color: #dc3545;
            margin-left: 4px;
        }

        .add-passenger {
            background-color: var(--light);
            border: 2px dashed var(--light-gray);
            border-radius: 8px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            margin: 20px 0;
            transition: all 0.3s;
        }

        .add-passenger:hover {
            border-color: var(--primary);
            background-color: rgba(26, 115, 232, 0.04);
        }

        .alert {
            background-color: #e8f0fe;
            border-left: 4px solid var(--primary);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: var(--dark);
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .passenger-container {
                margin: 0 20px;
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
    <!-- Header -->
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

    <!-- Hero Section -->
    <section class="sub-hero">
        <div class="container">
            <h1>Passenger Information</h1>
            <p>Please provide details for all passengers</p>
        </div>
    </section>

    <!-- Passenger Information Form -->
    <div class="passenger-container">
        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="step completed">
                <div class="step-number">1</div>
                <div class="step-label">Search</div>
            </div>
            <div class="step completed">
                <div class="step-number">2</div>
                <div class="step-label">Select Bus</div>
            </div>
            <div class="step active">
                <div class="step-number">3</div>
                <div class="step-label">Passenger Info</div>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <div class="step-label">Select Seats</div>
            </div>
            <div class="step">
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

        <div class="alert">
            Please enter the details for all passengers. Make sure the information matches official ID documents.
        </div>

        <!-- Passenger Forms -->
        <div class="passenger-card">
            <div class="passenger-header">
                <h3>Passenger 1 (Lead Passenger)</h3>
            </div>
            
            <form class="passenger-form">
                <div class="form-group">
                    <label for="p1-title">Title <span class="required">*</span></label>
                    <select id="p1-title" required>
                        <option value="">Select</option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="miss">Miss</option>
                        <option value="ms">Ms</option>
                        <option value="dr">Dr</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="p1-first-name">First Name <span class="required">*</span></label>
                    <input type="text" id="p1-first-name" required>
                </div>
                
                <div class="form-group">
                    <label for="p1-last-name">Last Name <span class="required">*</span></label>
                    <input type="text" id="p1-last-name" required>
                </div>
                
                <div class="form-group">
                    <label for="p1-age">Age <span class="required">*</span></label>
                    <input type="number" id="p1-age" min="0" max="120" required>
                </div>
                
                <div class="form-group">
                    <label for="p1-email">Email Address <span class="required">*</span></label>
                    <input type="email" id="p1-email" required>
                </div>
                
                <div class="form-group">
                    <label for="p1-phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="p1-phone" required>
                </div>
                
                <div class="form-group">
                    <label for="p1-id-type">ID Type <span class="required">*</span></label>
                    <select id="p1-id-type" required>
                        <option value="">Select</option>
                        <option value="passport">Passport</option>
                        <option value="driving">Driving License</option>
                        <option value="national">National ID</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="p1-id-number">ID Number <span class="required">*</span></label>
                    <input type="text" id="p1-id-number" required>
                </div>
            </form>
        </div>
        
        <div class="passenger-card">
            <div class="passenger-header">
                <h3>Passenger 2</h3>
                <button class="btn btn-secondary">Remove</button>
            </div>
            
            <form class="passenger-form">
                <div class="form-group">
                    <label for="p2-title">Title <span class="required">*</span></label>
                    <select id="p2-title" required>
                        <option value="">Select</option>
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="miss">Miss</option>
                        <option value="ms">Ms</option>
                        <option value="dr">Dr</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="p2-first-name">First Name <span class="required">*</span></label>
                    <input type="text" id="p2-first-name" required>
                </div>
                
                <div class="form-group">
                    <label for="p2-last-name">Last Name <span class="required">*</span></label>
                    <input type="text" id="p2-last-name" required>
                </div>
                
                <div class="form-group">
                    <label for="p2-age">Age <span class="required">*</span></label>
                    <input type="number" id="p2-age" min="0" max="120" required>
                </div>
                
                <div class="form-group">
                    <label for="p2-id-type">ID Type <span class="required">*</span></label>
                    <select id="p2-id-type" required>
                        <option value="">Select</option>
                        <option value="passport">Passport</option>
                        <option value="driving">Driving License</option>
                        <option value="national">National ID</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="p2-id-number">ID Number <span class="required">*</span></label>
                    <input type="text" id="p2-id-number" required>
                </div>
            </form>
        </div>
        
        <div class="add-passenger">
            <h3>+ Add Another Passenger</h3>
            <p>Click here to add more passengers to your booking</p>
        </div>
        
        <div class="buttons">
            <a href="/routes" class="btn btn-outline">Back</a>
            <a href="/seats" class="btn btn-primary">Continue to Seat Selection</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>EasyBus</h3>
                    <p>Making bus travel simple and comfortable.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/routes">Routes</a></li>
                        <li><a href="/manage-booking">Manage Booking</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="mailto:support@easybus.com">support@easybus.com</a></li>
                        <li><a href="tel:1800BUSEASY">1-800-BUS-EASY</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="/terms">Terms & Conditions</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 EasyBus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>