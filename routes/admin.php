<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Admin\Dashboard as AdminDashboard;


Route::get('/admin/dashboard', AdminDashboard::class)->middleware(['auth', 'verified'])->name('admin.dashboard');