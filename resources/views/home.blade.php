<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .nav-link {
            color: rgba(255,255,255,.8);
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .nav-link:hover {
            background-color: rgba(255,255,255,.1);
            color: white;
        }
        .header {
            background-color: #fff;
            padding: 15px 20px;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-title {
            color: #495057;
            font-weight: 600;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="sidebar" style="width: 250px;">
        <div class="text-center mb-4">
            <h5>Sabaragamuwa University of Sri Lanka</h5>
            <h6>Hostel Management System</h6>
        </div>
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <b>Home</b>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Add Student Details
                    <small class="d-block">To add student details</small>
                    <small class="d-block"><b>Click here</b></small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Search Student Details
                    <small class="d-block">To search student details</small>
                    <small class="d-block"><b>Click here</b></small>
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start w-100" style="border: none; background: none;">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h4>Home</h4>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Student Details</h5>
                        <p class="card-text">To add student details</p>
                        <a href="#" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search Student Details</h5>
                        <p class="card-text">To search student details</p>
                        <a href="#" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Copyrights 2024. All Rights Reserved</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>