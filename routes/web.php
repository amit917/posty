<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::post('/posts',[PostController::class,'store'])->name('store');
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/login',[LoginController::class,'store']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::post('/logout',[RegisterController::class,'index'])->name('logout');
