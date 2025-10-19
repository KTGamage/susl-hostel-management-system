<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student - SUSL Hostel Management</title>
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
        
        .container-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 0;
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
        
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 0;
            position: relative;
            z-index: 3;
        }
        
        .form-container {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            flex: 1;
            overflow-y: auto;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .form-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }
        
        .form-subtitle {
            font-size: 16px;
            color: #64748B;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .student-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--card-bg);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            color: var(--secondary-color);
            margin-top: 10px;
        }
        
        .form-section {
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-title i {
            color: var(--primary-color);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--secondary-color);
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
            margin-bottom: 20px;
            font-size: 15px;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.15);
        }
        
        .year-section {
            background-color: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 25px;
            border-left: 4px solid var(--primary-color);
        }
        
        .year-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .year-title i {
            color: var(--primary-color);
        }
        
        .btn-submit {
            background-color: var(--success);
            border: none;
            border-radius: 10px;
            padding: 14px 40px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            color: white;
            display: block;
            margin: 40px auto 0;
            width: 200px;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-submit:hover {
            background-color: #218838;
            transform: translateY(-3px);
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
        
        .alert-success {
            background-color: #d1f2eb;
            color: #0d5c4a;
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
            
            .form-container {
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
            
            .form-container {
                padding: 25px 20px;
            }
            
            .form-title {
                font-size: 24px;
            }
            
            .year-section {
                padding: 20px;
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
            
            .form-title {
                font-size: 22px;
            }
            
            .section-title {
                font-size: 18px;
            }
            
            .btn-submit {
                width: 100%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container-wrapper">
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
            
            <!-- Form Content -->
            <div class="content-wrapper">
                <div class="form-container">
                    <div class="form-header">
                        <h2 class="form-title">Edit Student Details</h2>
                        <p class="form-subtitle">Update the student information below. All fields marked with * are required.</p>
                        <div class="student-badge">
                            <i class="fas fa-id-card"></i> Student ID: {{ $student->student_id }}
                        </div>
                    </div>
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Please fix the following errors:</strong>
                            </div>
                            <ul class="mb-0 mt-2 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('student.details.update', $student->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-user"></i> Personal Information
                            </h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <select class="form-select" name="title" required>
                                        <option value="">Select Title</option>
                                        <option value="Mr." {{ $student->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ $student->title == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                        <option value="Miss" {{ $student->title == 'Miss' ? 'selected' : '' }}>Miss</option>
                                        <option value="Rev." {{ $student->title == 'Rev.' ? 'selected' : '' }}>Rev.</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Student ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="student_id" value="{{ $student->student_id }}" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="full_name" value="{{ $student->full_name }}" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Faculty <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="faculty" value="{{ $student->faculty }}" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Telephone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="telephone_number" value="{{ $student->telephone_number }}" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-home"></i> Hostel Information
                            </h3>
                            
                            <!-- First Year Section -->
                            <div class="year-section">
                                <h4 class="year-title">
                                    <i class="fas fa-calendar-alt"></i> First Year
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">First Year Hostel Name</label>
                                        <input type="text" class="form-control" name="first_year_hostel" value="{{ $student->first_year_hostel }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Payment Date for Hostel</label>
                                        <input type="date" class="form-control" name="first_year_payment_date" value="{{ $student->first_year_payment_date ? date('Y-m-d', strtotime($student->first_year_payment_date)) : '' }}">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Second Year Section -->
                            <div class="year-section">
                                <h4 class="year-title">
                                    <i class="fas fa-calendar-alt"></i> Second Year
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Second Year Hostel Name</label>
                                        <input type="text" class="form-control" name="second_year_hostel" value="{{ $student->second_year_hostel }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Payment Date for Hostel</label>
                                        <input type="date" class="form-control" name="second_year_payment_date" value="{{ $student->second_year_payment_date ? date('Y-m-d', strtotime($student->second_year_payment_date)) : '' }}">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Third Year Section -->
                            <div class="year-section">
                                <h4 class="year-title">
                                    <i class="fas fa-calendar-alt"></i> Third Year
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Third Year Hostel Name</label>
                                        <input type="text" class="form-control" name="third_year_hostel" value="{{ $student->third_year_hostel }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Payment Date for Hostel</label>
                                        <input type="date" class="form-control" name="third_year_payment_date" value="{{ $student->third_year_payment_date ? date('Y-m-d', strtotime($student->third_year_payment_date)) : '' }}">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Fourth Year Section -->
                            <div class="year-section">
                                <h4 class="year-title">
                                    <i class="fas fa-calendar-alt"></i> Fourth Year
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Fourth Year Hostel Name</label>
                                        <input type="text" class="form-control" name="fourth_year_hostel" value="{{ $student->fourth_year_hostel }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Payment Date for Hostel</label>
                                        <input type="date" class="form-control" name="fourth_year_payment_date" value="{{ $student->fourth_year_payment_date ? date('Y-m-d', strtotime($student->fourth_year_payment_date)) : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-users"></i> Guardian Information
                            </h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Guardian's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="guardian_name" value="{{ $student->guardian_name }}" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Guardian's Telephone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="guardian_telephone" value="{{ $student->guardian_telephone }}" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Residential Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="residential_address" rows="3" required>{{ $student->residential_address }}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-save"></i> Update Student
                        </button>
                    </form>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = document.querySelector('.btn-submit');
            
            form.addEventListener('submit', function(e) {
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';
                
                setTimeout(() => {
                    submitButton.disabled = false;
                    submitButton.innerHTML = '<i class="fas fa-save"></i> Update Student';
                }, 5000);
            });
        });
    </script>
</body>
</html>