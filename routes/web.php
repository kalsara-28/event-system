<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;

Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/login', [loginController::class, 'showloginForm'])->name('customers.login');
Route::post('/login', [loginController::class, 'login'])->name('customers.login');
Route::post('/logout', [loginController::class, 'logout'])->name('customers.logout');


use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/home', [PageController::class, 'home'])->name('home');


Route::view('/about','about_us')->name('about_us');

Route::view('/Service','service')->name('service');

Route::view('/package','packages')->name('packages');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Optional: Handle form submission
Route::post('/contact', function () {
    // You can add logic to handle and store/send the message
    return back()->with('success', 'Message sent successfully!');
})->name('contact.send');


Route::get('/event/{id}', [EventController::class, 'show'])->name('event.details');




Route::get('/main', function () {
    return view('main');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');







Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
