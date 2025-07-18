<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\User\Dashboard as UserDashboard;

Route::get('/dashboard', UserDashboard::class)->middleware(['auth', 'verified'])->name('dashboard');