<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusConnect - Choose Destination and Date</title>
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
        .search-form {
            margin-bottom: 2rem;
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
            justify-content: flex-end;
            margin-top: 2rem;
        }
        .required {
            color: #dc3545;
        }
        .route-type {
            display: flex;
            margin-bottom: 1.5rem;
        }
        .route-option {
            margin-right: 20px;
        }
        .route-option input {
            width: auto;
            margin-right: 5px;
        }
        .route-option label {
            display: inline;
            font-weight: normal;
        }
        .popular-routes {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .route-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 1rem;
        }
        .route-card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            background-color: white;
            flex: 1 0 calc(33% - 15px);
            min-width: 200px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .route-card:hover {
            border-color: #0056b3;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .route-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .route-info {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .date-inputs {
            display: flex;
            gap: 15px;
        }
        .date-inputs .form-group {
            flex: 1;
        }
        .passenger-count {
            display: flex;
            gap: 15px;
        }
        .passenger-count .form-group {
            flex: 1;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #f0f0f0;
            margin-top: 2rem;
        }
        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .swap-btn {
            display: block;
            text-align: center;
            margin: 10px 0;
            color: #0056b3;
            cursor: pointer;
        }
        .swap-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>BusConnect</h1>
    </header>
    
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

    <div class="container">
        <h2 class="form-title">Choose Destination and Date</h2>
        
        <div class="alert-info">
            Search for available buses by selecting your departure, destination, and travel dates.
        </div>
        
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
                <button type="submit" class="btn">Search Buses</button>
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
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
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