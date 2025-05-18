<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Route - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/route-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        .route-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .form-title {
            color: var(--primary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-gray);
        }

        .route-type {
            display: flex;
            margin-bottom: 25px;
            gap: 20px;
        }

        .route-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .route-option input[type="radio"] {
            width: auto;
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

        .swap-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            cursor: pointer;
            padding: 10px;
            margin: 10px 0;
            transition: color 0.3s;
        }

        .swap-btn:hover {
            color: var(--primary-dark);
        }

        .date-inputs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .passenger-count {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .popular-routes {
            margin-top: 40px;
            padding: 30px;
            background-color: var(--light);
            border-radius: 8px;
        }

        .route-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .route-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            cursor: pointer;
            transition: all 0.3s;
        }

        .route-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .route-title {
            color: var(--dark);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .route-info {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .required {
            color: #dc3545;
            margin-left: 4px;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .route-container {
                margin: 0 20px;
            }

            .date-inputs,
            .passenger-count {
                grid-template-columns: 1fr;
            }

            .route-cards {
                grid-template-columns: 1fr;
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
            <h1>Search Routes</h1>
            <p>Find the perfect bus route for your journey</p>
        </div>
    </section>

    <div class="route-container">
        <div class="progress-bar">
            <div class="step active">
                <div class="step-number">1</div>
                <div class="step-label">Search</div>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <div class="step-label">Select Bus</div>
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

        <h2 class="form-title">Choose Your Route</h2>
        
        <form class="search-form">
            <div class="route-type">
                <div class="route-option">
                    <input type="radio" id="one-way" name="journey-type" value="one-way" checked>
                    <label for="one-way">One-way</label>
                </div>
                <div class="route-option">
                    <input type="radio" id="round-trip" name="journey-type" value="round-trip">
                    <label for="round-trip">Round-trip</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="departure">Departure City/Station <span class="required">*</span></label>
                <select id="departure" required>
                    <option value="">Select departure location</option>
                    <option value="new-york">New York</option>
                    <option value="boston">Boston</option>
                    <option value="washington">Washington, D.C.</option>
                    <option value="chicago">Chicago</option>
                    <option value="miami">Miami</option>
                    <option value="los-angeles">Los Angeles</option>
                    <option value="san-francisco">San Francisco</option>
                    <option value="seattle">Seattle</option>
                </select>
            </div>
            
            <div class="swap-btn">
                <i>⇅ Swap locations</i>
            </div>
            
            <div class="form-group">
                <label for="destination">Destination City/Station <span class="required">*</span></label>
                <select id="destination" required>
                    <option value="">Select destination location</option>
                    <option value="new-york">New York</option>
                    <option value="boston">Boston</option>
                    <option value="washington">Washington, D.C.</option>
                    <option value="chicago">Chicago</option>
                    <option value="miami">Miami</option>
                    <option value="los-angeles">Los Angeles</option>
                    <option value="san-francisco">San Francisco</option>
                    <option value="seattle">Seattle</option>
                </select>
            </div>
            
            <div class="date-inputs">
                <div class="form-group">
                    <label for="departure-date">Departure Date <span class="required">*</span></label>
                    <input type="date" id="departure-date" required>
                </div>
                
                <div class="form-group">
                    <label for="departure-time">Preferred Time</label>
                    <select id="departure-time">
                        <option value="">Any Time</option>
                        <option value="morning">Morning (06:00 - 12:00)</option>
                        <option value="afternoon">Afternoon (12:00 - 18:00)</option>
                        <option value="evening">Evening (18:00 - 00:00)</option>
                        <option value="night">Night (00:00 - 06:00)</option>
                    </select>
                </div>
            </div>
            
            <div class="date-inputs" id="return-date-container" style="display: none;">
                <div class="form-group">
                    <label for="return-date">Return Date <span class="required">*</span></label>
                    <input type="date" id="return-date">
                </div>
                
                <div class="form-group">
                    <label for="return-time">Preferred Time</label>
                    <select id="return-time">
                        <option value="">Any Time</option>
                        <option value="morning">Morning (06:00 - 12:00)</option>
                        <option value="afternoon">Afternoon (12:00 - 18:00)</option>
                        <option value="evening">Evening (18:00 - 00:00)</option>
                        <option value="night">Night (00:00 - 06:00)</option>
                    </select>
                </div>
            </div>
            
            <div class="passenger-count">
                <div class="form-group">
                    <label for="adult-count">Adults <span class="required">*</span></label>
                    <select id="adult-count" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="child-count">Children (0-17)</label>
                    <select id="child-count">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="senior-count">Seniors (65+)</label>
                    <select id="senior-count">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Search Buses</button>
            </div>
        </form>
        
        <div class="popular-routes">
            <h3>Popular Routes</h3>
            <div class="route-cards">
                <div class="route-card">
                    <div class="route-title">New York → Boston</div>
                    <div class="route-info">4.5 hours • Daily departures</div>
                </div>
                <div class="route-card">
                    <div class="route-title">Washington → New York</div>
                    <div class="route-info">4 hours • Multiple departures</div>
                </div>
                <div class="route-card">
                    <div class="route-title">Chicago → Detroit</div>
                    <div class="route-info">5 hours • Daily departures</div>
                </div>
                <div class="route-card">
                    <div class="route-title">Los Angeles → San Francisco</div>
                    <div class="route-info">8 hours • Daily departures</div>
                </div>
                <div class="route-card">
                    <div class="route-title">Miami → Orlando</div>
                    <div class="route-info">3.5 hours • Multiple departures</div>
                </div>
                <div class="route-card">
                    <div class="route-title">Seattle → Portland</div>
                    <div class="route-info">3 hours • Daily departures</div>
                </div>
            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle return date visibility based on journey type
            const oneWayRadio = document.getElementById('one-way');
            const roundTripRadio = document.getElementById('round-trip');
            const returnDateContainer = document.getElementById('return-date-container');
            
            oneWayRadio.addEventListener('change', function() {
                returnDateContainer.style.display = 'none';
                document.getElementById('return-date').required = false;
            });
            
            roundTripRadio.addEventListener('change', function() {
                returnDateContainer.style.display = 'flex';
                document.getElementById('return-date').required = true;
            });
            
            // Set minimum date to today for departure date
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departure-date').min = today;
            document.getElementById('departure-date').value = today;
            
            // Update return date minimum when departure date changes
            document.getElementById('departure-date').addEventListener('change', function() {
                document.getElementById('return-date').min = this.value;
                
                // If return date is earlier than departure date, update it
                if (document.getElementById('return-date').value < this.value) {
                    document.getElementById('return-date').value = this.value;
                }
            });
            
            // Swap departure and destination
            document.querySelector('.swap-btn').addEventListener('click', function() {
                const departureSelect = document.getElementById('departure');
                const destinationSelect = document.getElementById('destination');
                const tempValue = departureSelect.value;
                
                departureSelect.value = destinationSelect.value;
                destinationSelect.value = tempValue;
            });
            
            // Popular route selection
            const routeCards = document.querySelectorAll('.route-card');
            routeCards.forEach(card => {
                card.addEventListener('click', function() {
                    const routeTitle = this.querySelector('.route-title').textContent;
                    const [departure, destination] = routeTitle.split('→').map(item => item.trim());
                    
                    // Map city names to values in the select options
                    const cityToValue = {
                        'New York': 'new-york',
                        'Boston': 'boston',
                        'Washington': 'washington',
                        'Chicago': 'chicago',
                        'Detroit': 'detroit',
                        'Los Angeles': 'los-angeles',
                        'San Francisco': 'san-francisco',
                        'Miami': 'miami',
                        'Orlando': 'orlando',
                        'Seattle': 'seattle',
                        'Portland': 'portland'
                    };
                    
                    document.getElementById('departure').value = cityToValue[departure] || '';
                    document.getElementById('destination').value = cityToValue[destination] || '';
                });
            });
        });
    </script>
</body>
</html>