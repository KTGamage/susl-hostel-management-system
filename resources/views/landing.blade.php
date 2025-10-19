<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUSL Hostel Management System</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4a6cf7;
            --primary-dark: #3a5cd8;
            --secondary-color: #2c3e50;
            --light-bg: #f0f0f0;
            --card-bg: #F1F5F9;
            --footer-bg: #E3E3E3;
            --white: #ffffff;
        }
        
        body {
            background: var(--light-bg);
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 12px 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 8px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 20px;
            color: var(--secondary-color) !important;
            text-decoration: none;
        }
        
        .navbar-logo {
            height: 45px;
            width: auto;
            margin-right: 12px;
        }
        
        .navbar-nav .nav-link {
            color: var(--secondary-color) !important;
            font-weight: 500;
            margin: 0 8px;
            transition: all 0.3s;
            position: relative;
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .btn-navbar {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-navbar:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        /* Hero Section with Slider */
        .hero-section {
            height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 70px;
        }
        
        .slider-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
            z-index: 1;
        }
        
        /* Hero Content */
        .hero-content {
            position: relative;
            z-index: 10;
            color: white;
            max-width: 1200px;
            padding: 0 20px;
            width: 100%;
        }
        
        .hero-text {
            max-width: 650px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out 0.2s both;
            font-weight: 500;
        }
        
        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 40px;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out 0.4s both;
        }
        
        .hero-buttons {
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .btn-hero {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 35px;
            font-weight: 600;
            font-size: 1.1rem;
            margin: 0 15px 15px 0;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        .btn-hero:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(74, 108, 247, 0.6);
        }
        
        .btn-hero-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            padding: 13px 35px;
            font-weight: 600;
            font-size: 1.1rem;
            margin: 0 15px 15px 0;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-hero-secondary:hover {
            background-color: white;
            color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }
        
        /* Slider Navigation */
        .slider-nav {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        
        .nav-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .nav-dot.active {
            background-color: white;
            transform: scale(1.2);
        }
        
        .nav-dot:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }
        
        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: var(--white);
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .stat-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 15px;
            background: var(--card-bg);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        
        .stat-text {
            font-size: 1rem;
            color: #64748B;
            font-weight: 500;
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: var(--white);
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: #64748B;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .feature-card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-color);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .feature-card h3 {
            color: var(--secondary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .feature-card p {
            color: #64748B;
            margin-bottom: 25px;
            font-size: 1rem;
            line-height: 1.6;
        }
        
        .btn-feature {
            background-color: var(--primary-color);
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .btn-feature:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }
        
        .btn-cta {
            background-color: white;
            color: var(--primary-color);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-cta:hover {
            background-color: var(--card-bg);
            color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Footer */
        .footer {
            background-color: var(--footer-bg);
            padding: 60px 0 30px;
            border-top: 1px solid #ddd;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .footer-logo-img {
            height: 50px;
            width: auto;
        }
        
        .footer-logo-text {
            font-weight: 700;
            font-size: 18px;
            color: var(--secondary-color);
        }
        
        .footer-links {
            display: flex;
            gap: 25px;
        }
        
        .footer-link {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .footer-link:hover {
            color: var(--primary-color);
        }
        
        .copyright-section {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            padding-top: 30px;
            border-top: 1px solid #ccc;
        }
        
        .copyright_logo {
            height: 35px;
            width: auto;
        }
        
        .copyright {
            font-weight: 400;
            font-size: 16px;
            color: var(--secondary-color);
            margin: 0;
            text-align: center;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-links {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .btn-hero,
            .btn-hero-secondary {
                display: block;
                margin: 10px auto;
                width: 250px;
            }
            
            .navbar-brand {
                font-size: 16px;
            }
            
            .navbar-logo {
                height: 40px;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
            
            .features-section,
            .stats-section,
            .cta-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .cta-title {
                font-size: 2rem;
            }
            
            .cta-description {
                font-size: 1rem;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .navbar {
                padding: 10px 0;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://vle.sab.ac.lk/pluginfile.php/1/theme_adaptable/logo/1754025143/Logosusl.png" alt="SUSL Logo" class="navbar-logo">
                <span>SUSL Hostel Management</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="{{ route('admin.login') }}" class="btn-navbar">
                    <i class="fas fa-sign-in-alt me-2"></i>Admin Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="slider-container">
            <div class="slide active" style="background-image: url('{{ asset('images/hero1.jpeg') }}')"></div>
            <div class="slide" style="background-image: url('{{ asset('images/hero2.jpeg') }}')"></div>
            <div class="slide" style="background-image: url('{{ asset('images/hero3.jpeg') }}')"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Welcome to SUSL Hostel Management</h1>
                <h2 class="hero-subtitle">Comfortable Living, Simplified Management</h2>
                <p class="hero-description">
                    Experience modern, comfortable living at Sabaragamuwa University of Sri Lanka. 
                    Our comprehensive hostel management system ensures a seamless and secure accommodation experience for all students.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('admin.login') }}" class="btn-hero">
                        <i class="fas fa-user-shield me-2"></i>Admin Access
                    </a>
                    <a href="#features" class="btn-hero-secondary">
                        <i class="fas fa-info-circle me-2"></i>Learn More
                    </a>
                </div>
            </div>
        </div>

        <div class="slider-nav">
            <div class="nav-dot active" data-slide="0"></div>
            <div class="nav-dot" data-slide="1"></div>
            <div class="nav-dot" data-slide="2"></div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">2,500+</div>
                    <div class="stat-text">Students Accommodated</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-text">Hostel Buildings</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-number">15+</div>
                    <div class="stat-text">Years of Service</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="stat-number">100%</div>
                    <div class="stat-text">Secure Environment</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Features</h2>
                <p class="section-subtitle">Discover how our hostel management system simplifies accommodation processes for both students and administrators</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3>Secure Access Control</h3>
                        <p>Role-based access ensures only authorized personnel can manage sensitive student data and hostel operations.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <h3>Room Allocation</h3>
                        <p>Efficient room allocation system with real-time availability tracking and automated assignment processes.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h3>Fee Management</h3>
                        <p>Streamlined fee collection, tracking, and reporting with multiple payment options and automated reminders.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3>Maintenance Tracking</h3>
                        <p>Comprehensive maintenance request system with priority levels and real-time status updates.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analytics & Reports</h3>
                        <p>Detailed analytics and customizable reports for informed decision-making and resource planning.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Responsive</h3>
                        <p>Fully responsive design that works seamlessly across all devices - desktop, tablet, and mobile.</p>
                        <a href="#" class="btn-feature">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Ready to Experience Better Hostel Management?</h2>
            <p class="cta-description">Join hundreds of administrators who have transformed their hostel operations with our comprehensive management system.</p>
            <a href="{{ route('admin.login') }}" class="btn-cta">
                <i class="fas fa-rocket me-2"></i>Get Started Today
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="https://vle.sab.ac.lk/pluginfile.php/1/theme_adaptable/logo/1754025143/Logosusl.png" alt="SUSL Logo" class="footer-logo-img">
                    <div class="footer-logo-text">SUSL Hostel Management</div>
                </div>
                <div class="footer-links">
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#features" class="footer-link">Features</a>
                    <a href="{{ route('contact.us') }}" class="footer-link">Contact Us</a>
                    <a href="{{ route('admin.login') }}" class="footer-link">Admin Login</a>
                </div>
            </div>
            <div class="copyright-section">
                <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
                <div class="copyright">Copyrights FACULTY OF COMPUTING SUSL 2025. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Image Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const navDots = document.querySelectorAll('.nav-dot');
            let currentSlide = 0;
            const totalSlides = slides.length;
            
            // Auto slide functionality
            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                navDots[currentSlide].classList.remove('active');
                
                currentSlide = (currentSlide + 1) % totalSlides;
                
                slides[currentSlide].classList.add('active');
                navDots[currentSlide].classList.add('active');
            }
            
            // Set up auto-advance
            setInterval(nextSlide, 5000); // Change slide every 5 seconds
            
            // Manual navigation
            navDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    slides[currentSlide].classList.remove('active');
                    navDots[currentSlide].classList.remove('active');
                    
                    currentSlide = index;
                    
                    slides[currentSlide].classList.add('active');
                    navDots[currentSlide].classList.add('active');
                });
            });
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId !== '#') {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
            
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Active nav link on scroll
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>