<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusConnect - Seat Selection</title>
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
            max-width: 900px;
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
        .bus-layout {
            margin: 2rem auto;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        .bus-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin: 1rem 0;
        }
        .seat {
            text-align: center;
            padding: 10px 0;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }
        .seat-available {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            color: #495057;
        }
        .seat-available:hover {
            background-color: #bee5eb;
            border-color: #0056b3;
        }
        .seat-selected {
            background-color: #28a745;
            color: white;
            border: 1px solid #1e7e34;
        }
        .seat-unavailable {
            background-color: #dc3545;
            color: white;
            border: 1px solid #bd2130;
            opacity: 0.7;
            cursor: not-allowed;
        }
        .seat-empty {
            background: none;
            border: none;
            cursor: default;
        }
        .driver-seat {
            background-color: #6c757d;
            color: white;
            border: 1px solid #5a6268;
            cursor: default;
        }
        .legend {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 1rem 0;
        }
        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }
        .legend-available {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
        }
        .legend-selected {
            background-color: #28a745;
            border: 1px solid #1e7e34;
        }
        .legend-unavailable {
            background-color: #dc3545;
            border: 1px solid #bd2130;
            opacity: 0.7;
        }
        .bus-front {
            text-align: center;
            margin-bottom: 1rem;
            font-weight: bold;
            color: #495057;
        }
        .bus-door {
            height: 30px;
            width: 60px;
            background-color: #6c757d;
            margin: 0 auto;
            border-radius: 4px;
        }
        .selected-seats {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        .selected-seat-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .selected-seat-item:last-child {
            border-bottom: none;
        }
        .price-summary {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #e9ecef;
            border-radius: 8px;
            border: 1px solid #dee2e6;
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

    <div class="container">
        <h2 class="form-title">Select Your Seats</h2>
        
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
            <button class="btn btn-secondary">Back</button>
            <button class="btn">Continue to Review</button>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
    </footer>
</body>
</html>