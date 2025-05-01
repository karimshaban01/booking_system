<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusConnect - Passenger Information</title>
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
        .passenger-form {
            margin-bottom: 2rem;
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
        .passenger-card {
            background-color: #f9f9f9;
            border-left: 4px solid #0056b3;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }
        .passenger-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
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
        .required {
            color: #dc3545;
        }
        .add-passenger {
            background-color: #f8f9fa;
            border: 2px dashed #ccc;
            border-radius: 4px;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            margin: 1rem 0;
            transition: all 0.3s;
        }
        .add-passenger:hover {
            border-color: #0056b3;
            background-color: #e9ecef;
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

    <div class="container">
        <h2 class="form-title">Passenger Information</h2>
        
        <div class="alert alert-info">
            Please enter the details for all passengers. Make sure the information matches official ID documents.
        </div>
        
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
            <button class="btn btn-secondary">Back</button>
            <button class="btn">Continue to Seat Selection</button>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 BusConnect. All rights reserved.</p>
    </footer>
</body>
</html>