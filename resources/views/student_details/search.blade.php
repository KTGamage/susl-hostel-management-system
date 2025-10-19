<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student - SUSL Hostel Management</title>
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
        
        .back-btn {
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
        
        .back-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 6px 15px rgba(74, 108, 247, 0.4);
        }
        
        .content-container {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            flex: 1;
            position: relative;
            z-index: 3;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }
        
        .page-subtitle {
            font-size: 16px;
            color: #64748B;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .search-card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border-left: 4px solid var(--primary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .search-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .search-title i {
            color: var(--primary-color);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--secondary-color);
            margin-bottom: 10px;
            display: block;
        }
        
        .search-input {
            width: 100%;
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
            margin-bottom: 20px;
            font-size: 15px;
        }
        
        .search-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.15);
            outline: none;
        }
        
        .submit-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .submit-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(74, 108, 247, 0.5);
        }
        
        .results-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
            display: none;
        }
        
        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-color);
        }
        
        .results-title {
            font-size: 22px;
            font-weight: 600;
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .student-id-badge {
            background: var(--card-bg);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            color: var(--secondary-color);
        }
        
        .student-details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        .student-details-table td {
            padding: 15px;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .student-details-table tr:last-child td {
            border-bottom: none;
        }
        
        .student-details-table td:first-child {
            font-weight: 600;
            color: var(--secondary-color);
            width: 30%;
            vertical-align: top;
        }
        
        .student-details-table td:last-child {
            color: #64748B;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .btn-edit {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 5px 15px rgba(74, 108, 247, 0.4);
        }
        
        .btn-edit:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 8px 20px rgba(74, 108, 247, 0.5);
        }
        
        .btn-print {
            background-color: var(--success);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        }
        
        .btn-print:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.5);
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
            
            .content-container {
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
            
            .content-container {
                padding: 25px 20px;
            }
            
            .page-title {
                font-size: 24px;
            }
            
            .search-card {
                padding: 25px;
            }
            
            .results-card {
                padding: 25px;
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
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-edit, .btn-print {
                width: 100%;
                max-width: 200px;
                justify-content: center;
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
            
            .page-title {
                font-size: 22px;
            }
            
            .results-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .student-details-table td:first-child {
                width: 40%;
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
            <a href="{{ route('admin.dashboard') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
        
        <!-- Content Container -->
        <div class="content-container">
            <div class="page-header">
                <h2 class="page-title">Search Student Details</h2>
                <p class="page-subtitle">Enter a student ID to search for student information in the system</p>
            </div>
            
            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                </div>
            @endif
            
            <!-- Search Card -->
            <div class="search-card">
                <h3 class="search-title">
                    <i class="fas fa-search"></i> Search Student
                </h3>
                <form method="POST" action="{{ route('student.details.search.post') }}">
                    @csrf
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" class="search-input" id="student_id" name="student_id" placeholder="Enter student ID (e.g., 21CIS0920)" required>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-search"></i> Search Student
                    </button>
                </form>
            </div>
            
            <!-- Results Card -->
            @if(isset($student))
            <div class="results-card" style="display: block;">
                <div class="results-header">
                    <h3 class="results-title">
                        <i class="fas fa-user-graduate"></i> Student Details
                    </h3>
                    <div class="student-id-badge">
                        <i class="fas fa-id-card"></i> ID: {{ $student->student_id }}
                    </div>
                </div>
                
                <table class="student-details-table">
                    <tr>
                        <td>Title</td>
                        <td>{{ $student->title }}</td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>{{ $student->full_name }}</td>
                    </tr>
                    <tr>
                        <td>Student ID</td>
                        <td>{{ $student->student_id }}</td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td>{{ $student->faculty }}</td>
                    </tr>
                    <tr>
                        <td>Telephone Number</td>
                        <td>{{ $student->telephone_number }}</td>
                    </tr>
                    <tr>
                        <td>First Year Hostel</td>
                        <td>{{ $student->first_year_hostel ?? 'Not Assigned' }}</td>
                    </tr>
                    <tr>
                        <td>First Year Payment Date</td>
                        <td>
                            @if($student->first_year_payment_date)
                                {{ date('d/m/Y', strtotime($student->first_year_payment_date)) }}
                            @else
                                Not Available
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Second Year Hostel</td>
                        <td>{{ $student->second_year_hostel ?? 'Not Assigned' }}</td>
                    </tr>
                    <tr>
                        <td>Second Year Payment Date</td>
                        <td>
                            @if($student->second_year_payment_date)
                                {{ date('d/m/Y', strtotime($student->second_year_payment_date)) }}
                            @else
                                Not Available
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Third Year Hostel</td>
                        <td>{{ $student->third_year_hostel ?? 'Not Assigned' }}</td>
                    </tr>
                    <tr>
                        <td>Third Year Payment Date</td>
                        <td>
                            @if($student->third_year_payment_date)
                                {{ date('d/m/Y', strtotime($student->third_year_payment_date)) }}
                            @else
                                Not Available
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Fourth Year Hostel</td>
                        <td>{{ $student->fourth_year_hostel ?? 'Not Assigned' }}</td>
                    </tr>
                    <tr>
                        <td>Fourth Year Payment Date</td>
                        <td>
                            @if($student->fourth_year_payment_date)
                                {{ date('d/m/Y', strtotime($student->fourth_year_payment_date)) }}
                            @else
                                Not Available
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Guardian's Name</td>
                        <td>{{ $student->guardian_name }}</td>
                    </tr>
                    <tr>
                        <td>Guardian's Telephone</td>
                        <td>{{ $student->guardian_telephone }}</td>
                    </tr>
                    <tr>
                        <td>Residential Address</td>
                        <td>{{ $student->residential_address }}</td>
                    </tr>
                </table>
                
                <div class="action-buttons">
                    <a href="{{ route('student.details.edit', $student->id) }}" class="btn-edit">
                        <i class="fas fa-edit"></i> Edit Details
                    </a>
                    <button class="btn-print" onclick="window.print()">
                        <i class="fas fa-print"></i> Print
                    </button>
                </div>
            </div>
            @endif
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