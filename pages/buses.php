<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Buses - EasyBus</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Add hero section for sub-pages */
        .sub-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("../assets/images/bus-hero.jpg") center/cover;
            height: 200px;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            margin-bottom: 50px;
        }

        .sub-hero h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .search-summary {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            margin: 30px auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .bus-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin: 30px 0;
        }

        .bus-card {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 25px;
            transition: transform 0.3s;
        }

        .bus-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .route-cities {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--dark);
        }

        .price {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .bus-card {
                grid-template-columns: 1fr;
            }

            .price-booking {
                border-left: none;
                border-top: 1px solid var(--light-gray);
                padding-top: 20px;
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
                    <a href="/" class="active">Home</a>
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

    <!-- Add sub-hero section -->
    <section class="sub-hero">
        <div class="container">
            <h1>Available Buses</h1>
            <p>Choose from our selection of comfortable buses</p>
        </div>
    </section>

    <div class="container">
        <div class="search-summary">
            <div class="route-info">
                <div class="route-cities">New York → Boston</div>
                <div class="travel-date">May 20, 2025</div>
            </div>
            <button class="btn btn-outline">Modify Search</button>
        </div>

        <h2 class="section-title">Available Buses</h2>
        
        <div class="bus-grid">
            <!-- Bus card with updated styling -->
            <div class="bus-card">
                <div class="bus-details">
                    <div class="bus-operator">
                        <h3>Express Lines</h3>
                        <span class="rating">4.5 ⭐</span>
                    </div>
                    <div class="journey-details">
                        <div class="time">
                            <span class="departure">09:00 AM</span>
                            <span class="duration">4h 30m</span>
                            <span class="arrival">01:30 PM</span>
                        </div>
                        <div class="bus-type">Luxury Coach • WiFi • Power Outlets</div>
                    </div>
                </div>
                <div class="price-booking">
                    <div class="price">$45</div>
                    <button class="btn btn-primary">Select Seats</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy footer from index.php -->
    <footer>
        <!-- ...existing footer code... -->
    </footer>
</body>
</html>