<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', [HomeController::class, 'index'])->name('home');

//auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store' ])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{user}/update', [ProfileController::class, 'create'])->name('profile.update');
Route::put('/profile/{user}/update', [ProfileController::class, 'update'])->name('update');
Route::delete('/profile/{user}', [ProfileController::class, 'destroy'])->name('profile.destroy');


//post
Route::get('/dashboard/create', [PostController::class, 'index'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post');
Route::get('/post/{post:title}/detail', [PostController::class, 'show'])->name('post.show'); 
Route::delete('/post/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy');
