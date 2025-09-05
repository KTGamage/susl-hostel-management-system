<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SUSL Hostel Management</title>
  
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <h1>SUSL Hostel Management</h1>
            </div>
            <div class="user-info">
                <span>Welcome, {{ Session::get('admin_user_id') }}!</span>
                <a href="{{ route('admin.logout') }}" class="logout-btn">Logout</a>
            </div>
        </div>
    </header>
    
 
</body>
</html>
