<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabaragamuwa University - Hostel Management</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background: #f0f0f0;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Container to position both elements */
        .container {
            position: relative;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            min-height: 800px;
        }
        
        /* Background div */
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
        
        .transparent-box {
            min-height: 150px;
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
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(10px); 
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
        }
        
        .welcome-text {
            text-align: center;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        
        .form-label {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #ddd;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #4a6cf7;
            box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.25);
        }
        
        .btn-login {
            background-color: #4a6cf7;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background-color: #3a5cd8;
            transform: translateY(-2px);
        }
        
        .bottom-div {
            background-color: #E3E3E3;
            height: 110px;
            position: absolute;
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
        
        .login-content {
            position: relative;
            z-index: 3;
            padding: 30px 0;
        }
        
        @media (max-width: 768px) {
            .transparent-box {
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
            }
            
            .university-name {
                font-size: 22px;
            }
            
            .system-name {
                font-size: 18px;
            }
            
            .login-container {
                padding: 25px;
            }
            
            .container {
                min-height: 700px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Background div -->
        <div class="background-div"></div>
        
        <!-- Header with logo and university name -->
        <div class="transparent-box">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="logo">
            <div class="text-container">
                <div class="university-name">Sabaragamuwa University of Sri Lanka</div>
                <div class="system-name">Hostel Management System</div>
            </div>
        </div>
        
        <!-- Login Form -->
        <div class="login-content">
            <div class="login-container">
                <div class="welcome-text">Welcome to Hostel Management System</div>
                
                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control @error('user_id') is-invalid @enderror" 
                               id="user_id" name="user_id" value="{{ old('user_id') }}" required autofocus>
                        @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-login w-100">Login</button>
                </form>
            </div>
        </div>
        
        <!-- Footer with copyright -->
        <div class="bottom-div">
            <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
            <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>