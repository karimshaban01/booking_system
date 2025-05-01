<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyBus - Modern Bus Booking</title>
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
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--gray);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
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
        
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/api/placeholder/1200/500") center/cover;
            height: 500px;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .search-box {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            max-width: 900px;
            margin: -80px auto 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .search-form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr auto;
            gap: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .form-group label {
            font-weight: 500;
            color: var(--gray);
        }
        
        .form-control {
            padding: 12px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }
        
        .search-btn {
            align-self: flex-end;
            padding: 12px 25px;
            background-color: var(--secondary);
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        
        .search-btn:hover {
            background-color: #2d8f46;
        }
        
        .features {
            padding: 80px 0;
            text-align: center;
        }
        
        .section-title {
            font-size: 36px;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--primary);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 8px;
            padding: 30px 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .feature-card p {
            color: var(--gray);
        }
        
        .popular-routes {
            padding: 80px 0;
            background-color: #f0f4f8;
        }
        
        .routes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .route-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .route-card:hover {
            transform: translateY(-10px);
        }
        
        .route-image {
            height: 200px;
            background-color: #ddd;
        }
        
        .route-info {
            padding: 20px;
        }
        
        .route-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .route-price {
            font-size: 24px;
            color: var(--primary);
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .route-meta {
            display: flex;
            justify-content: space-between;
            color: var(--gray);
            margin-bottom: 15px;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column ul li a {
            color: #b0b7c3;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column ul li a:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #3a3a3a;
            color: #b0b7c3;
        }
        
        @media (max-width: 768px) {
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .nav-links, .auth-buttons {
                display: none;
            }
            
            .hero h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Easy<span>Bus</span></a>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Routes</a>
                    <a href="#">Offers</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                </div>
                <div class="auth-buttons">
                    <a href="#" class="btn btn-outline">Sign In</a>
                    <a href="#" class="btn btn-primary">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Travel Made Simple</h1>
                <p>Book your bus tickets quickly and securely with our modern booking platform. Thousands of routes available nationwide.</p>
            </div>
        </div>
    </section>

    <!-- Search Box -->
    <div class="container">
        <div class="search-box">
            <form class="search-form" action="step1.html">
                <div class="form-group">
                    <label for="from">From</label>
                    <input type="text" id="from" class="form-control" placeholder="Enter departure city">
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <input type="text" id="to" class="form-control" placeholder="Enter destination city">
                </div>
                <div class="form-group">
                    <label for="date">Travel Date</label>
                    <input type="date" id="date" class="form-control">
                </div>
                <button type="submit" class="search-btn">Search Buses</button>
            </form>
        </div>
    </div>

    <!-- Features -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🎫</div>
                    <h3>Easy Booking</h3>
                    <p>Book your tickets in a few simple clicks. No hassle, no complications.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Best Prices</h3>
                    <p>Get the most competitive prices for all your bus travel needs.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure Payments</h3>
                    <p>Your payment and personal information are always protected.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚌</div>
                    <h3>Wide Network</h3>
                    <p>Access to thousands of bus routes across the country.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Routes -->
    <section class="popular-routes">
        <div class="container">
            <h2 class="section-title">Popular Routes</h2>
            <div class="routes-grid">
                <div class="route-card">
                    <div class="route-image">
                        <img src="/api/placeholder/300/200" alt="New York to Boston" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="route-info">
                        <h3 class="route-title">New York to Boston</h3>
                        <div class="route-price">$45</div>
                        <div class="route-meta">
                            <span>4.5 hours</span>
                            <span>Daily departures</span>
                        </div>
                        <a href="step1.html" class="btn btn-primary" style="display:block; text-align:center;">Book Now</a>
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-image">
                        <img src="/api/placeholder/300/200" alt="Los Angeles to San Francisco" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="route-info">
                        <h3 class="route-title">Los Angeles to San Francisco</h3>
                        <div class="route-price">$65</div>
                        <div class="route-meta">
                            <span>6 hours</span>
                            <span>Daily departures</span>
                        </div>
                        <a href="step1.html" class="btn btn-primary" style="display:block; text-align:center;">Book Now</a>
                    </div>
                </div>
                <div class="route-card">
                    <div class="route-image">
                        <img src="/api/placeholder/300/200" alt="Chicago to Detroit" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="route-info">
                        <h3 class="route-title">Chicago to Detroit</h3>
                        <div class="route-price">$35</div>
                        <div class="route-meta">
                            <span>5 hours</span>
                            <span>Daily departures</span>
                        </div>
                        <a href="step1.html" class="btn btn-primary" style="display:block; text-align:center;">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>EasyBus</h3>
                    <p>Making bus travel simple, affordable, and comfortable for everyone.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Search Routes</a></li>
                        <li><a href="#">Manage Booking</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="#">support@easybus.com</a></li>
                        <li><a href="#">1-800-BUS-EASY</a></li>
                        <li><a href="#">Live Chat</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
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