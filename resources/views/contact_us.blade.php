<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <title>Details verified Page</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    

    <style>
        body {
            background: #f0f0f0;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        /* Container to position both elements */
        .container {
            position: relative;
            width: 90%;
            margin: 20px auto;
            min-height: 1200px;
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
            z-index: 2; /* Ensure it stays above the background */
            margin-bottom: 40px;
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(10px); 
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
            align-items: center;       /* centers horizontally */
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
        
        .content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .contact {
        position: relative;
        left: 80px;
        top: 50px;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 16px;
        font-weight: 400;
        color: #333;
        z-index: 2;
        }
        .contact_us_wording{
        font-weight: 700;
        font-size: 35px;
        margin-top: 200px;
        font-family: 'Roboto', sans-serif;
        }
         .contact-item {
        display: flex;
        align-items: left;
        gap: 30px;

        }
        .contact-icon {
            height: 30px;
            width: 30px;
        }
        .copyright_logo {
            height: 40px;
            width: auto;
            position: static;  /* remove absolute positioning */
            margin-left: 20px;
        }
            
        .copyright{
            position: relative;
            font-weight: 300;
            font-size: 18px;
            margin-left: 10px;
            line-height: 1.2;
            
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
            }
            
            .university-name {
                font-size: 22px;
            }
            
            .system-name {
                font-size: 18px;
            }
            
          
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Background div with 800px height -->
        <div class="background-div"></div>
        
        <!-- Your existing transparent box -->
        <div class="transparent-box">
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="logo" alt="University Logo" class="logo">
            <div class="text-container">
                <div class="university-name">Sabaragamuwa University of Sri Lanka</div>
                <div class="system-name">Hostel Management System</div>
            </div>
        </div>
        
        <div class="contact">
                <p class="contact_us_wording">Contact Us</p>
                <div class="contact-item">
                    <img src="{{ asset('images/phone.png') }}" alt="Phone" class="contact-icon">
                    <div style="font-size:18px; height:30px; ">+94 45 222 5555</div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('images/email.png') }}" alt="Email" class="contact-icon">
                    <div style="font-size:18px; height:30px; ">codeorbit@gmail.com</div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('images/address.png') }}" alt="Email" class="contact-icon">
                    <div style="font-size:18px; height:30px; ">Sabaragamuwa University<br>Belihuloya<br>Sri Lanka</div>
                </div>
                <p style="font-size:18px; height:30px; font-style: italic; margin-top:40px;">Developed by CODEORBIT.
                    Faculty of computing (Sabaragamuwa University of Sri Lanka)
                </p>
                
        </div>
         <div class="bottom-div">
            <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
            
                <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
            
            
        </div>
    </div>
</body>
</html>