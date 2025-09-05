<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

// Admin Authentication Routes
Route::get('/', function() {
    return view('auth.admin_login');
})->name('admin.login');
Route::post('/', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard Route
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

// Redirect /home to admin login for compatibility
Route::get('/home', function() {
    return redirect()->route('admin.login');
});