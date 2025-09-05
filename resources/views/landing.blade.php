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
        body {
            background: #f0f0f0;
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
            padding: 15px 0;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 20px;
            color: #2c3e50 !important;
            text-decoration: none;
        }
        
        .navbar-logo {
            height: 50px;
            width: auto;
            margin-right: 15px;
        }
        
        .navbar-nav .nav-link {
            color: #2c3e50 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .navbar-nav .nav-link:hover {
            color: #4a6cf7 !important;
            transform: translateY(-2px);
        }
        
        .btn-navbar {
            background-color: #4a6cf7;
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
            background-color: #3a5cd8;
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
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }
        
        /* Hero Content */
        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out 0.2s both;
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
            background-color: #4a6cf7;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 35px;
            font-weight: 600;
            font-size: 1.1rem;
            margin: 0 10px 10px 0;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        .btn-hero:hover {
            background-color: #3a5cd8;
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
            margin: 0 10px 10px 0;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-hero-secondary:hover {
            background-color: white;
            color: #2c3e50;
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
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: #ffffff;
        }
        
        .feature-card {
            background: #F1F5F9;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: #4a6cf7;
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            color: #1E3A8A;
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: 600;
        }
        
        .feature-card p {
            color: #64748B;
            margin-bottom: 25px;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .btn-feature {
            background-color: #1E3A8A;
            color: white;
            border-radius: 25px;
            padding: 12px 30px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }
        
        .btn-feature:hover {
            background-color: #3B82F6;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(30, 58, 138, 0.4);
        }
        
        /* Footer */
        .footer {
            background-color: #E3E3E3;
            padding: 40px 0;
            text-align: center;
            border-top: 1px solid #ddd;
        }
        
        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .copyright_logo {
            height: 40px;
            width: auto;
        }
        
        .copyright {
            font-weight: 300;
            font-size: 18px;
            color: #2c3e50;
            margin: 0;
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
                height: 70px;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
            
            .features-section {
                padding: 60px 0;
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
                    
                </ul>
                <a href="{{ route('admin.login') }}" class="btn-navbar">
                    <i class="fas fa-sign-in-alt me-2"></i>Admin Login
                </a>
            </div>
        </div>
    </nav>

  
    <section id="home" class="hero-section">
        <div class="slider-container">
       
            <div class="slide active" style="background-image: url('')"></div>
            
            
            <div class="slide" style="background-image: url('')"></div>
            
         
            <div class="slide" style="background-image: url('')"></div>
            
      
            <div class="slide" style="background-image: url('')"></div>
            
  
            <div class="slide" style="background-image: url('')"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title">Welcome to SUSL</h1>
            <h2 class="hero-subtitle">Hostel Management System</h2>
            <p class="hero-description">
                Experience modern, comfortable living at Sabaragamuwa University of Sri Lanka. 
                Our comprehensive hostel management system ensures a seamless and secure accommodation experience for all students.
            </p>
            <div class="hero-buttons">
                <a href="{{ route('admin.login') }}" class="btn-hero">
                    <i class="fas fa-user-shield me-2"></i>Admin Access
                </a>
                <a href="#about" class="btn-hero-secondary">
                    <i class="fas fa-info-circle me-2"></i>Learn More
                </a>
            </div>
        </div>

        <div class="slider-nav">
            <div class="nav-dot active" data-slide="0"></div>
            <div class="nav-dot" data-slide="1"></div>
            <div class="nav-dot" data-slide="2"></div>
            <div class="nav-dot" data-slide="3"></div>
            <div class="nav-dot" data-slide="4"></div>
        </div>
    </section>

    <!-- Features Section -->
    

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
                <div class="copyright">Copyrights  FACULTY OF COMPUTING SUSL 2025. All Rights Reserved.</div>
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
        });
    </script>
</body>
</html>
