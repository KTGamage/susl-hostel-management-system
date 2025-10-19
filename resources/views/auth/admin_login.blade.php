<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - SUSL Hostel Management</title>
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
        
        .login-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 3;
            padding: 30px 0;
        }
        
        .login-container {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            border-top: 5px solid var(--primary-color);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .login-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }
        
        .login-subtitle {
            font-size: 16px;
            color: #64748B;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--secondary-color);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-label i {
            color: var(--primary-color);
            width: 20px;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
            font-size: 15px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.15);
        }
        
        .input-group {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748B;
        }
        
        .btn-login {
            background-color: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            color: white;
            width: 100%;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-login:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(74, 108, 247, 0.5);
        }
        
        .login-footer {
            text-align: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }
        
        .login-footer p {
            color: #64748B;
            font-size: 14px;
            margin: 0;
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
        
        .alert {
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 25px;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        
        .alert-danger {
            background-color: #fde8e8;
            color: #7f1d1d;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .header {
                padding: 20px 30px;
            }
            
            .login-container {
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
            
            .login-container {
                padding: 25px 20px;
            }
            
            .login-title {
                font-size: 24px;
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
            
            .login-title {
                font-size: 22px;
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
        </div>
        
        <!-- Login Content -->
        <div class="login-content">
            <div class="login-container">
                <div class="login-header">
                    <div class="login-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h2 class="login-title">Admin Login</h2>
                    <p class="login-subtitle">Access the hostel management system dashboard</p>
                </div>
                
                @if($errors->any())
                    <div class="alert alert-danger">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Login Failed</strong>
                        </div>
                        <ul class="mb-0 mt-2 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="user_id" class="form-label">
                            <i class="fas fa-user"></i> User ID
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" 
                                   id="user_id" name="user_id" value="{{ old('user_id') }}" required autofocus
                                   placeholder="Enter your user ID">
                            <span class="input-icon">
                                <i class="fas fa-id-card"></i>
                            </span>
                            @error('user_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock"></i> Password
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" required placeholder="Enter your password">
                            <span class="input-icon">
                                <i class="fas fa-key"></i>
                            </span>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Login to Dashboard
                    </button>
                </form>
                
                <div class="login-footer">
                    <p>Secure access for authorized personnel only</p>
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