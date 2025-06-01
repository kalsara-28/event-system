<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;

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


Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::post('/booking', function () {
    // You can save booking data or send email here
    return back()->with('success', 'Booking submitted successfully!');
})->name('booking.submit');



Route::view('/payment', 'payment')->name('payment');
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'process'])->name('payment.process');

Route::get('/main', function () {
    return view('main');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/service/{type}', function ($type) {
    return view('event-detail', ['type' => $type]);
})->name('service.details');

Route::get('/payment', function () {
    return view('payment.process');
})->name('payment.process');

Route::post('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.process');
