<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Seats - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/seats-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .seats-container {
            max-width: 900px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .bus-layout {
            background-color: var(--light);
            border-radius: 8px;
            padding: 25px;
            margin: 30px 0;
        }

        .bus-front {
            text-align: center;
            margin-bottom: 20px;
        }

        .bus-door {
            height: 30px;
            width: 60px;
            background-color: var(--gray);
            margin: 0 auto;
            border-radius: 4px;
        }

        .bus-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .seat {
            text-align: center;
            padding: 10px 0;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .seat-available {
            background-color: white;
            border: 1px solid var(--light-gray);
            color: var(--dark);
        }

        .seat-available:hover {
            border-color: var(--primary);
            background-color: rgba(26, 115, 232, 0.04);
        }

        .seat-selected {
            background-color: var(--secondary);
            color: white;
            border: 1px solid var(--secondary);
        }

        .seat-unavailable {
            background-color: var(--light-gray);
            color: var(--gray);
            cursor: not-allowed;
            opacity: 0.7;
        }

        .seat-empty {
            background: none;
            border: none;
            cursor: default;
        }

        .driver-seat {
            background-color: var(--gray);
            color: white;
            cursor: default;
        }

        .legend {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }

        .selected-seats {
            background-color: var(--light);
            border-radius: 8px;
            padding: 25px;
            margin-top: 30px;
        }

        .selected-seat-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .price-summary {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid var(--light-gray);
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }

        .price-total {
            border-top: 2px solid var(--primary);
            margin-top: 10px;
            padding-top: 15px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .seats-container {
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

            .legend {
                flex-wrap: wrap;
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
            <h1>Select Your Seats</h1>
            <p>Choose your preferred seats for a comfortable journey</p>
        </div>
    </section>

    <div class="seats-container">
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
            <div class="step active">
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

        <div class="alert alert-info">
            Please select 2 seats from the bus layout below. Click on an available seat to select or deselect it.
        </div>

        <div class="bus-layout">
            <div class="bus-front">
                <p>FRONT</p>
                <div class="bus-door"></div>
            </div>
            
            <div class="bus-grid">
                <div class="seat driver-seat">D</div>
                <div class="seat-empty"></div>
                <div class="seat-empty"></div>
                <div class="seat seat-unavailable">1</div>
                <div class="seat seat-unavailable">2</div>
                
                <div class="seat seat-available">3</div>
                <div class="seat seat-available">4</div>
                <div class="seat-empty"></div>
                <div class="seat seat-available">5</div>
                <div class="seat seat-available">6</div>
                
                <div class="seat seat-available">7</div>
                <div class="seat seat-available">8</div>
                <div class="seat-empty"></div>
                <div class="seat seat-selected">9</div>
                <div class="seat seat-selected">10</div>
                
                <div class="seat seat-available">11</div>
                <div class="seat seat-unavailable">12</div>
                <div class="seat-empty"></div>
                <div class="seat seat-unavailable">13</div>
                <div class="seat seat-unavailable">14</div>
                
                <div class="seat seat-available">15</div>
                <div class="seat seat-available">16</div>
                <div class="seat-empty"></div>
                <div class="seat seat-available">17</div>
                <div class="seat seat-available">18</div>
                
                <div class="seat seat-available">19</div>
                <div class="seat seat-available">20</div>
                <div class="seat-empty"></div>
                <div class="seat seat-available">21</div>
                <div class="seat seat-available">22</div>
                
                <div class="seat seat-available">23</div>
                <div class="seat seat-available">24</div>
                <div class="seat-empty"></div>
                <div class="seat seat-available">25</div>
                <div class="seat seat-available">26</div>
                
                <div class="seat seat-available">27</div>
                <div class="seat seat-available">28</div>
                <div class="seat seat-available">29</div>
                <div class="seat seat-available">30</div>
                <div class="seat seat-available">31</div>
            </div>
            
            <div class="legend">
                <div class="legend-item">
                    <div class="legend-color legend-available"></div>
                    <span>Available</span>
                </div>
                <div class="legend-item">
                    <div class="legend-color legend-selected"></div>
                    <span>Selected</span>
                </div>
                <div class="legend-item">
                    <div class="legend-color legend-unavailable"></div>
                    <span>Unavailable</span>
                </div>
            </div>
        </div>
        
        <div class="selected-seats">
            <h3>Selected Seats</h3>
            
            <div class="selected-seat-item">
                <div>
                    <strong>Seat 9</strong> - Passenger 1: John Smith
                </div>
                <div>$45.00</div>
            </div>
            
            <div class="selected-seat-item">
                <div>
                    <strong>Seat 10</strong> - Passenger 2: Jane Smith
                </div>
                <div>$45.00</div>
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
        
        <div class="buttons">
            <a href="./buses.php" class="btn btn-outline">Back</a>
            <a href="./passenger.php" class="btn btn-primary">Continue to Passenger Information</a>
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