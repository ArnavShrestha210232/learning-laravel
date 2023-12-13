<?php

use App\Http\Controllers\User\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [UserController::class, 'index'])->name('main');
Route::get('/services', [UserController::class, 'service'])->name('service');
Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/contact', [UserController::class, 'contactus'])->name('contact');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
Route::get('/language', [UserController::class, 'language'])->name('language');
Route::get('/abroad', [UserController::class, 'abroad'])->name('abroad');
Route::get('/message', [UserController::class, 'message'])->name('message');
