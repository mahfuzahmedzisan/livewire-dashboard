<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Admin\Dashboard as AdminDashboard;

Route::group(['middleware' => ['auth:admin', 'admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
});
