<?php

use App\Http\Controllers\User;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'register'])->name('user.register_action');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login_action'])->name('user.login_action');
Route::post('/register', [AuthController::class, 'register_action'])->name('user.register_action');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/new', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/create_action', [BlogController::class, 'create_action'])->name('blog.crate_action');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/blogs', [BlogController::class, 'index']);
// });
