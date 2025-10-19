<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <title>Sabaragamuwa University - Hostel Management</title>
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
    
        .ok_logo{
        height: 300px;
        width: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
          
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
        <div class="transparent-box"><!-- sabaragmuwa university logo and header -->
            <img src="{{ asset('images/logo.png') }}" alt="University Logo" class="logo" alt="University Logo" class="logo">
            <div class="text-container">
                <div class="university-name">Sabaragamuwa University of Sri Lanka</div>
                <div class="system-name">Hostel Management System</div>
            </div>
        </div>

        
            <img src="images/ok.png" class="ok_logo"> 
       
        

         <div class="bottom-div">
            <img src="{{ asset('images/Copyright.png') }}" alt="Copyright Logo" class="copyright_logo">
            
                <div class="copyright">Copyrights SUSL 2025. All Rights Reserved.</div>
            
            
        </div>
    </div>
</body>
</html>



