<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('admin.index');
});

Route::resource('users', \App\Http\Controllers\Admin\User\UserController::class)->except('show');
Route::get('/users/{user}/permissions', [\App\Http\Controllers\Admin\User\PermissionController::class, 'create'])->name('users.permissions')->middleware('can:staff-user-permissions');
Route::post('/users/{user}/permissions', [\App\Http\Controllers\Admin\User\PermissionController::class, 'store'])->name('users.permissions.store')->middleware('can:staff-user-permissions');
Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class)->except('show');
Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class)->except('show');
Route::resource('products', \App\Http\Controllers\Admin\ProductController::class)->except('show');


Route::get('comments/unapproved', [\App\Http\Controllers\Admin\CommentController::class, 'unapproved'])->name('comments.unapproved');
Route::resource('comments', \App\Http\Controllers\Admin\CommentController::class)->only(['index', 'update', 'destroy']);
Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
