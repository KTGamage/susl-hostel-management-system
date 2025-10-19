<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - SUSL Hostel Management</title>
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
        
        /* Header Styles */
        .header-section {
            background-color: #E3E3E3;
            border-radius: 50px;
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .header-logo {
            height: 100px;
            width: auto;
        }
        
        .header-text {
            flex: 1;
        }
        
        .university-name {
            font-weight: 700;
            font-size: 28px;
            margin: 0;
            line-height: 1.3;
            color: #2c3e50;
        }
        
        .system-name {
            font-size: 22px;
            margin: 5px 0 0 0;
            color: #2c3e50;
            font-weight: 500;
        }
        
        /* Contact Section */
        .contact-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .contact-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .contact-title {
            font-weight: 700;
            font-size: 42px;
            color: #2c3e50;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .contact-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #4a6cf7;
            border-radius: 2px;
        }
        
        .contact-subtitle {
            font-size: 18px;
            color: #64748B;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .contact-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .contact-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .contact-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #E3E3E3;
            border-radius: 50%;
            color: #4a6cf7;
            font-size: 32px;
        }
        
        .contact-card h3 {
            font-size: 22px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .contact-card p {
            color: #64748B;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 0;
        }
        
        .contact-link {
            color: #4a6cf7;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .contact-link:hover {
            color: #3a5cd8;
        }
        
        /* Map and Info Section */
        .map-info-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .map-container {
            background: #FFFFFF;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            height: 400px;
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            background: #E3E3E3;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748B;
            font-size: 18px;
        }
        
        .info-container {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .info-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .info-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: #4a6cf7;
            border-radius: 2px;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .info-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
            color: #4a6cf7;
            flex-shrink: 0;
            margin-top: 2px;
        }
        
        .info-content h4 {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .info-content p {
            color: #64748B;
            margin: 0;
            line-height: 1.6;
        }
        
        /* Developer Section */
        .developer-section {
            background: #E3E3E3;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin-bottom: 40px;
        }
        
        .developer-text {
            font-size: 16px;
            color: #2c3e50;
            font-style: italic;
            margin: 0;
            line-height: 1.6;
        }
        
        /* Footer */
        .footer {
            background-color: #E3E3E3;
            padding: 30px 0;
            border-top: 1px solid #ddd;
        }
        
        .footer-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .copyright-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .copyright_logo {
            height: 40px;
            width: auto;
        }
        
        .copyright {
            font-weight: 400;
            font-size: 16px;
            color: #2c3e50;
            margin: 0;
        }
        
        .back-to-top {
            background-color: #4a6cf7;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .back-to-top:hover {
            background-color: #3a5cd8;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .map-info-section {
                grid-template-columns: 1fr;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .header-logo {
                height: 80px;
            }
            
            .university-name {
                font-size: 24px;
            }
            
            .system-name {
                font-size: 18px;
            }
        }
        
        @media (max-width: 768px) {
            .contact-title {
                font-size: 36px;
            }
            
            .contact-cards {
                grid-template-columns: 1fr;
            }
            
            .contact-card {
                padding: 30px 20px;
            }
            
            .info-container {
                padding: 30px 20px;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
        
        @media (max-width: 576px) {
            .contact-title {
                font-size: 30px;
            }
            
            .contact-subtitle {
                font-size: 16px;
            }
            
            .header-section {
                border-radius: 30px;
                margin: 15px auto;
            }
            
            .contact-section {
                margin: 30px auto;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header-section">
        <div class="header-content">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="header-logo">
            <div class="header-text">
                <h1 class="university-name">Sabaragamuwa University of Sri Lanka</h1>
                <p class="system-name">Hostel Management System</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-header">
            <h2 class="contact-title">Contact Us</h2>
            <p class="contact-subtitle">Get in touch with us for any inquiries or assistance regarding hostel accommodations and management</p>
        </div>
        
        <div class="contact-cards">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Phone</h3>
                <p>+94 45 222 5555</p>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p>codeorbit@gmail.com</p>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Address</h3>
                <p>Sabaragamuwa University<br>Belihuloya<br>Sri Lanka</p>
            </div>
        </div>
        
        <div class="map-info-section">
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt" style="font-size: 48px; margin-right: 15px;"></i>
                    <span>University Location Map</span>
                </div>
            </div>
            
            <div class="info-container">
                <h3 class="info-title">University Information</h3>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4>Office Hours</h4>
                        <p>Monday - Friday: 8:30 AM - 4:30 PM<br>Saturday: 8:30 AM - 12:30 PM</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="info-content">
                        <h4>Hostel Office</h4>
                        <p>Located in the Student Welfare Building, Ground Floor</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="info-content">
                        <h4>Emergency Contact</h4>
                        <p>For urgent hostel matters after office hours, contact security: +94 45 222 5556</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="developer-section">
            <p class="developer-text">Developed by CODEORBIT. Faculty of Computing (Sabaragamuwa University of Sri Lanka)</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="copyright-section">
                <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
                <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
            </div>
            <a href="#" class="back-to-top">
                <i class="fas fa-arrow-up"></i> Back to Top
            </a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Back to top button functionality
        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Add shadow to header on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header-section');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.15)';
            } else {
                header.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>