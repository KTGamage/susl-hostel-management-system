<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SUSL Hostel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            --success: #28a745;
        }
        
        body {
            background: var(--light-bg);
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .main-container {
            position: relative;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 0;
        }
        
        .background-div {
            background-color: var(--white);
            height: 100%;
            border-radius: 25px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .header {
            min-height: 120px;
            background-color: var(--footer-bg);
            border-radius: 25px;
            color: var(--secondary-color);
            padding: 20px 40px;
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 2;
            margin-bottom: 30px;
            flex-shrink: 0;
        }
        
        .logo {
            height: 80px;
            width: auto;
            margin-right: 20px;
        }
        
        .header-text {
            flex: 1;
        }
        
        .university-name {
            font-weight: 700;
            font-size: 24px;
            margin: 0;
            line-height: 1.3;
        }
        
        .system-name {
            font-size: 18px;
            margin: 5px 0 0 0;
            color: var(--secondary-color);
            font-weight: 500;
        }
        
        .logout-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 10px rgba(74, 108, 247, 0.3);
        }
        
        .logout-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 6px 15px rgba(74, 108, 247, 0.4);
        }
        
        .dashboard-content {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            flex: 1;
            position: relative;
            z-index: 3;
        }
        
        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .dashboard-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }
        
        .dashboard-subtitle {
            font-size: 16px;
            color: #64748B;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .feature-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .feature-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-color);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .feature-card h3 {
            color: var(--secondary-color);
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: 600;
        }
        
        .feature-card p {
            color: #64748B;
            margin-bottom: 25px;
            font-size: 15px;
            line-height: 1.5;
        }
        
        .btn-feature {
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 10px rgba(74, 108, 247, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-feature:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(74, 108, 247, 0.4);
        }
        
        .stats-section {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            margin-top: 40px;
            border-left: 4px solid var(--primary-color);
        }
        
        .stats-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .stats-title i {
            color: var(--primary-color);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .stat-card {
            background: var(--white);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 14px;
            color: #64748B;
            font-weight: 500;
        }
        
        .footer {
            background-color: var(--footer-bg);
            padding: 25px 0;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 2;
            flex-shrink: 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        
        .copyright-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .copyright_logo {
            height: 35px;
            width: auto;
        }
            
        .copyright {
            font-weight: 400;
            font-size: 16px;
            line-height: 1.2;
            margin: 0;
            color: var(--secondary-color);
        }
        
        .contact-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .contact-link:hover {
            color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .header {
                padding: 20px 30px;
            }
            
            .dashboard-content {
                padding: 30px;
            }
            
            .footer-content {
                padding: 0 30px;
            }
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
                padding: 25px 20px;
                gap: 15px;
            }
            
            .logo {
                height: 70px;
                margin-right: 0;
            }
            
            .header-text {
                margin-bottom: 15px;
            }
            
            .university-name {
                font-size: 20px;
            }
            
            .system-name {
                font-size: 16px;
            }
            
            .dashboard-content {
                padding: 25px 20px;
            }
            
            .dashboard-title {
                font-size: 28px;
            }
            
            .feature-cards {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .copyright-section {
                flex-direction: column;
                gap: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .main-container {
                width: 95%;
                margin: 15px auto;
            }
            
            .header {
                min-height: auto;
                padding: 20px;
            }
            
            .dashboard-title {
                font-size: 24px;
            }
            
            .feature-card {
                padding: 25px 20px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-section {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Background div -->
        <div class="background-div"></div>
        
        <!-- Header with logo and university name -->
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="logo">
            <div class="header-text">
                <div class="university-name">Sabaragamuwa University of Sri Lanka</div>
                <div class="system-name">Hostel Management System</div>
            </div>
            <a href="{{ route('admin.logout') }}" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
        </div>
        
        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <div class="dashboard-header">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">Manage student hostel information and system operations</p>
            </div>
            
            <div class="feature-cards">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3>Add Student Details</h3>
                    <p>Add new student information to the hostel management system including personal details, guardian information, and hostel allocation.</p>
                    <a href="{{ route('student.details.create') }}" class="btn-feature">
                        <i class="fas fa-plus-circle"></i> Add Student
                    </a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Search Student Details</h3>
                    <p>Find and view student information by student ID. Edit details or print student records for administrative purposes.</p>
                    <a href="{{ route('student.details.search') }}" class="btn-feature">
                        <i class="fas fa-search"></i> Search Student
                    </a>
                </div>
            </div>
            
            <div class="stats-section">
                <h3 class="stats-title">
                    <i class="fas fa-chart-bar"></i> System Overview
                </h3>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">1,250+</div>
                        <div class="stat-label">Students Registered</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Hostel Buildings</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">System Uptime</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years of Service</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <div class="copyright-section">
                    <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
                    <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
                </div>
                <a href="{{ route('contact.us') }}" class="contact-link">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>