<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('products/{product}', [App\Http\Controllers\ProductController::class, 'single']);
Route::post('comments', [App\Http\Controllers\HomeController::class, 'comment'])->name('send.comment');
