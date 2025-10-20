<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\StudentDetailController;

// Health check route for Railway
Route::get('/health', function() {
    return response()->json([
        'status' => 'healthy',
        'timestamp' => now(),
        'service' => 'Hostel Management System',
        'environment' => app()->environment()
    ]);
});

// Add a simple test route
Route::get('/test', function() {
    return response()->json([
        'message' => 'Application is running',
        'timestamp' => now()
    ]);
});

// Landing Page Route
Route::get('/', function() {
    return view('landing');
})->name('landing');

// Admin Authentication Routes
Route::get('/admin/login', function() {
    return view('auth.admin_login');
})->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard Route
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

// Student Details Routes
Route::middleware(['web'])->group(function () {
    // Create Student
    Route::get('/admin/student-details/create', [StudentDetailController::class, 'create'])
        ->name('student.details.create');
    Route::post('/admin/student-details/store', [StudentDetailController::class, 'store'])
        ->name('student.details.store');

    // Edit Student
    Route::get('/admin/student-details/{id}/edit', [StudentDetailController::class, 'edit'])
        ->name('student.details.edit');
    Route::put('/admin/student-details/{id}', [StudentDetailController::class, 'update'])
        ->name('student.details.update');

    // Student Search Routes
    Route::post('student-details/search', [StudentDetailController::class, 'searchByID'])
        ->name('student.details.search.post');
});

Route::get('student-details/search', function () {
    return view('student_details.search');
})->name('student.details.search');

// Contact Us Route
Route::get('/contact-us', function() {
    return view('contact_us');
})->name('contact.us');

// Redirect /home to admin login for compatibility
Route::get('/home', function() {
    return redirect()->route('admin.login');
});