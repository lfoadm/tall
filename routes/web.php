<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});


//Auth
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');

//Admin
Route::middleware('auth')->group(function () {
   Route::get('/dashboard', Dashboard::class)->name('dashboard');
});
