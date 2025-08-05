<?php

use App\Livewire\Backend\Admin\AdminManagement\Admin;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Admin\Dashboard as AdminDashboard;
use App\Livewire\Backend\Admin\AdminManagement\Admin\Index as AdminIndex;

Route::group(['middleware' => ['auth:admin', 'admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::name('am.')->prefix('admin-management')->group(function () {
        Route::name('admin.')->prefix('admin')->group(function () {
            Route::get('/', AdminIndex::class)->name('index');
        });
    });
});
