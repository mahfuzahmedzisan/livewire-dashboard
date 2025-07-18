<?php


use Illuminate\Support\Facades\Route;

// User Authentication
use App\Http\Controllers\Auth\User\VerifyEmailController as UserVerifyEmailController;
use App\Livewire\Auth\User\ConfirmPassword as UserConfirmPassword;
use App\Livewire\Auth\User\ForgotPassword as UserForgotPassword;
use App\Livewire\Auth\User\Login as UserLogin;
use App\Livewire\Auth\User\Register as UserRegister;
use App\Livewire\Auth\User\ResetPassword as UserResetPassword;
use App\Livewire\Auth\User\VerifyEmail as UserVerifyEmail;

// Admin Authentication
use App\Http\Controllers\Auth\Admin\VerifyEmailController as AdminVerifyEmailController;
use App\Livewire\Auth\Admin\ConfirmPassword as AdminConfirmPassword;
use App\Livewire\Auth\Admin\ForgotPassword as AdminForgotPassword;
use App\Livewire\Auth\Admin\Login as AdminLogin;
use App\Livewire\Auth\Admin\Register as AdminRegister;
use App\Livewire\Auth\Admin\ResetPassword as AdminResetPassword;
use App\Livewire\Auth\Admin\VerifyEmail as AdminVerifyEmail;


// User Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', UserLogin::class)->name('login');
    Route::get('register', UserRegister::class)->name('register');
    Route::get('forgot-password', UserForgotPassword::class)->name('password.request');
    Route::get('reset-password/{token}', UserResetPassword::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', UserVerifyEmail::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', UserVerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::get('confirm-password', UserConfirmPassword::class)
        ->name('password.confirm');
});

Route::post('logout', App\Livewire\Actions\Logout::class)
    ->name('logout');

// Admin Authentication Routes
Route::middleware('guest')->name('admin.')->group(function () {
    Route::get('admin/login', AdminLogin::class)->name('login');
    // Route::get('admin/register', UserRegister::class)->name('register');
    Route::get('admin/forgot-password', AdminForgotPassword::class)->name('password.request');
    Route::get('admin/reset-password/{token}', AdminResetPassword::class)->name('password.reset');
});
