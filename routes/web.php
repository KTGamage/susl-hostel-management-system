<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\StudentDetailController;

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
Route::get('/admin/student-details/create', [StudentDetailController::class, 'create'])
    ->name('student.details.create');
Route::post('/admin/student-details/store', [StudentDetailController::class, 'store'])
    ->name('student.details.store');

// Redirect /home to admin login for compatibility
Route::get('/home', function() {
    return redirect()->route('admin.login');
});