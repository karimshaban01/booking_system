<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyBus - Select Ticket Type</title>
    <style>
        :root {
            --primary: #1a73e8;
            --primary-dark: #0d47a1;
            --secondary: #34a853;
            --light: #f8f9fa;
            --dark: #202124;
            --gray: #5f6368;
            --light-gray: #dadce0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        .booking-progress {
            margin: 40px 0;
        }
        
        .steps {
            display: flex;
            justify-content: space-between;
            position: relative;
        }
        
        .steps::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: var(--light-gray);
            z-index: -1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 120px;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            border: 2px solid var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-weight: bold;
            color: var(--gray);
        }
        
        .step.active .step-number {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .step.completed .step-number {
            background-color: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }
        
        .step-label {
            font-size: 14px;
            color: var(--gray);
            font-weight: 500;
        }
        
        .step.active .step-label {
            color: var(--primary);
            font-weight: bold;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .journey-summary {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 30px;
        }

        .journey-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .journey-title {
            font-size: 18px;
            font-weight: bold;
            color: var(--dark);
        }

        .journey-date {
            color: var(--gray);
            font-size: 14px;
        }

        .journey-details {
            display: flex;
            align-items: center;
            position: relative;
            margin-bottom: 20px;
        }

        .journey-details::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 30px;
            right: 30px;
            height: 2px;
            background-color: var(--light-gray);
            z-index: 0;
        }

        .journey-point {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
            position: relative;
            z-index: 1;
            background-color: white;
        }

        .journey-time {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .journey-location {
            font-size: 14px;
            color: var(--gray);
            text-align: center;
        }

        .journey-arrow {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--gray);
            position: relative;
            z-index: 1;
        }

        .journey-company {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px dashed var(--light-gray);
        }

        .company-logo {
            width: 30px;
            height: 30px;
            background-color: var(--light-gray);
            border-radius: 50%;
            margin-right: 10px;
        }

        .company-name {
            font-weight: 500;
        }

        .ticket-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .ticket-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .ticket-card.selected {
            border-color: var(--primary);
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .ticket-type {
            font-size: 20px;
            font-weight: bold;
        }

        .ticket-price {
            font-size: 22px;
            font-weight: bold;
            color: var(--primary);
        }

        .ticket-features {
            margin-bottom: 20px;
        }

        .ticket-feature {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: var(--gray);
        }

        .feature-icon {
            margin-right: 10px;
            color: var(--secondary);
        }

        .ticket-description {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .popular-badge {
            background-color: var(--secondary);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
        }

        .btn-outline {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: rgba(26, 115, 232, 0.04);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        footer {
            background-color: var(--dark);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }

        .copyright {
            text-align: center;
            color: #b0b7c3;
        }

        @media (max-width: 768px) {
            .journey-details {
                flex-direction: column;
                align-items: flex-start;
            }

            .journey-details::before {
                display: none;
            }

            .journey-point {
                width: 100%;
                flex-direction: row;
                justify-content: space-between;
                margin-bottom: 10px;
            }

            .journey-arrow {
                transform: rotate(90deg);
                margin: 10px 0;
            }

            .steps {
                overflow-x: auto;
                padding-bottom: 10px;
            }

            .step {
                min-width: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">Easy<span>Bus</span></a>
            </nav>
        </div>
    </header>

    <!-- Booking Progress -->
    <div class="container">
        <div class="booking-progress">
            <div class="steps">
                <div class="step completed">
                    <div class="step-number">1</div>
                    <div class="step-label">Choose Destination</div>
                </div>
                <div class="step active">
                    <div class="step-number">2</div>
                    <div class="step-label">Select Ticket</div>
                </div>
                <div class="step">
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
        </div>
    </div>

    <main class="container">
        <h1 class="page-title">Select Your Ticket Type</h1>
        
        <!-- Journey Summary -->
        <div class="journey-summary">
            <div class="journey-header">
                <div class="journey-title">Your Selected Trip</div>
                <div class="journey-date">May 15, 2025</div>
            </div>
            <div class="journey-details">
                <div class="journey-point">
                    <div class="journey-time">07:30 AM</div>
                    <div class="journey-location">New York Central Bus Terminal</div>
                </div>
                <div class="journey-arrow">→</div>
                <div class="journey-point">
                    <div class="journey-time">12:00 PM</div>
                    <div class="journey-location">Boston South Station</div>
                </div>
            </div>
            <div class="journey-company">
                <div class="company-logo"></div>
                <div class="company-name">MetroLine Express - Luxury Sleeper</div>
            </div>
        </div>
        
        <!-- Ticket Options -->
        <div class="ticket-options">
            <!-- Standard Ticket -->
            <div class="ticket-card">
                <div class="ticket-header">
                    <div class="ticket-type">Standard</div>
                    <div class="ticket-price">$45</div>
                </div>
                <div class="ticket-features">
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>1 Standard size baggage (up to 15kg)</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Basic amenities</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Onboard entertainment</span>
                    </div>
                </div>
                <div class="ticket-description">
                    Basic ticket with all essential amenities for a comfortable journey.
                </div>
            </div>
            
            <!-- Premium Ticket -->
            <div class="ticket-card selected">
                <div class="ticket-header">
                    <div class="ticket-type">Premium</div>
                    <div class="ticket-price">$55</div>
                </div>
                <div class="popular-badge">Most Popular</div>
                <div class="ticket-features">
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>2 Baggage items (up to 25kg total)</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Priority boarding</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Complimentary snacks</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Free seat selection</span>
                    </div>
                </div>
                <div class="ticket-description">
                    Enhanced travel experience with added benefits for maximum comfort.
                </div>
            </div>
            
            <!-- Business Ticket -->
            <div class="ticket-card">
                <div class="ticket-header">
                    <div class="ticket-type">Business</div>
                    <div class="ticket-price">$75</div>
                </div>
                <div class="ticket-features">
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>3 Baggage items (up to 35kg total)</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Priority boarding</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Premium meal service</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Extra legroom seating</span>
                    </div>
                    <div class="ticket-feature">
                        <span class="feature-icon">✓</span>
                        <span>Dedicated business lounge access</span>
                    </div>
                </div>
                <div class="ticket-description">
                    First-class experience with all premium services for business travelers.
                </div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="step1.html" class="btn btn-outline">Back</a>
            <a href="step3.html" class="btn btn-primary">Continue</a>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; 2025 EasyBus. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>