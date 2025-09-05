<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SUSL Hostel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background: #f0f0f0;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            /* position: relative;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            min-height: 800px; */
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
            background-color: #FFFFFF;
            height: 100%;
            border-radius: 50px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .header {
            /* min-height: 150px;
            background-color: #E3E3E3;
            border-radius: 50px;
            color: #000000ff;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: 0 4px 10px rgba(153, 153, 153, 0.5);
            border: 2px #3a3a3aff;  
            z-index: 2;
            margin-bottom: 40px;
            margin-top: 30px; */
            min-height: 150px;
            background-color: #E3E3E3;
            border-radius: 50px;
            border-color: #000000ff;
            border-width: 5px;
            color: #000000ff;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: 0 4px 10px rgba(153, 153, 153, 0.5);
            border: 2px #3a3a3aff;  
            z-index: 2;
            margin-bottom: 40px;
            margin-top: 10px;
            flex-shrink: 0;
        }
        
        .logo {
            height: 130px;
            width: auto;
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .text-container {
            margin-left: 180px;
            width: calc(100% - 150px);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .university-name {
            font-weight: 700;
            font-size: 32px;
            margin: 0;
            line-height: 1.5;
        }
        
        .system-name {
            font-size: 26px;
            margin: 5px 0 0 0;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .logout-btn {
            background-color: #4a6cf7;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .logout-btn:hover {
            background-color: #3a5cd8;
            transform: translateY(-2px);
        }
        
        .home-content {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 3;
            margin-bottom: 40px;
        }
        
        .home-title {
            text-align: center;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 40px;
            color: #2c3e50;
        }
        
        .feature-card {
            background: #F1F5F9;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-card h3 {
            color: #1E3A8A;
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        .feature-card p {
            color: #64748B;
            margin-bottom: 20px;
            font-size: 16px;
        }
        
        .btn-feature {
            background-color: #1E3A8A;
            color: white;
            border-radius: 8px;
            padding: 10px 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn-feature:hover {
            background-color: #3B82F6;
            color: white;
        }
        
        .bottom-div {
            
            /* background-color: #E3E3E3;
            height: 110px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: flex;               
            align-items: center;
            justify-content: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            position: relative;
            z-index: 2;
            flex-shrink: 0;
            margin-bottom: 10px; */

            background-color: #E3E3E3;
            height: 110px;
            position: relative;
            bottom: 0px;
            left: 0;
            width: 100%;
            z-index: 2;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: flex;               
            align-items: center;
            justify-content: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            padding: 0 40px;
            margin-bottom: 10px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
        }

        .copyright-section {
            display: flex;
            align-items: center;
        }
        
        
        .copyright_logo {
            height: 40px;
            width: auto;
            margin-right: 15px;
        }
            
        .copyright {
            font-weight: 300;
            font-size: 18px;
            line-height: 1.2;
            margin: 0;
        }

        .contact-link {
            color: #009DFF;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: all 0.3s;
        }

        .contact-link:hover {
            text-decoration: underline;
            color: #007acc;
        }
        
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 80px 20px 20px 20px;
                text-align: center;
            }
            
            .logo {
                position: absolute;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                height: 80px;
            }
            
            .text-container {
                margin-left: 0;
                width: 100%;
                margin-top: 70px;
                flex-direction: column;
                gap: 15px;
            }
            
            .university-name {
                font-size: 22px;
            }
            
            .system-name {
                font-size: 18px;
            }
            
            .home-content {
                padding: 25px;
            }
            
            .container {
                min-height: 700px;
            }

            .bottom-div {
                height: auto;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Background div -->
        <div class="background-div"></div>
        
        <!-- Header with logo and university name -->
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="logo">
            <div class="text-container">
                <div>
                    <div class="university-name">Sabaragamuwa University of Sri Lanka</div>
                    <div class="system-name">Hostel Management System</div>
                </div>
                <a href="{{ route('admin.logout') }}" class="logout-btn">Log Out</a>
            </div>
        </div>
        
        <!-- Home Content -->
        <div class="home-content">
            <h2 class="home-title">Home</h2>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <h3>Add Student Details</h3>
                        <p>To add student details</p>
                        <!-- <button class="btn-feature">Click Here</button> -->
                        <a href="{{ route('student.details.create') }}" class="btn-feature">Click Here</a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <h3>Search Student Details</h3>
                        <p>To search student details</p>
                        <button class="btn-feature">Click Here</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer with copyright -->
       
         <div class="bottom-div">
            <div class="footer-content">
                <div class="copyright-section">
                        <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
                    <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
                </div>
                    <div class="contact-section">
                        <a href="{{ route('contact.us') }}" class="contact-link">Contact Us</a>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>