<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\Home;

Route::name('f.')->group(function () {
    Route::get('/', Home::class)->name('home');
});
