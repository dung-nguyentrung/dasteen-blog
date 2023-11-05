<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DashboardController,
    PermissionController,
    RoleController,
    TagController,
    UserController
};

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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Permissions
Route::delete('permissions/massDestroy', [PermissionController::class, 'massDestroy']);
Route::resource('permissions', PermissionController::class);

//Roles
Route::delete('roles/massDestroy', [RoleController::class, 'massDestroy']);
Route::resource('roles', RoleController::class);

//Users 
Route::delete('users/massDestroy', [UserController::class, 'massDestroy']);
Route::resource('users', UserController::class);

// Categories
Route::delete('categories/massDestroy', [CategoryController::class, 'massDestroy']);
Route::resource('categories', CategoryController::class);

// Tags
Route::delete('tags/massDestroy', [TagController::class, 'massDestroy']);
Route::resource('tags', TagController::class);
