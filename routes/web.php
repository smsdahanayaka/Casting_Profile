<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmintblController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\usersController;

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

// home page
Route::get('', [usersController::class, "main"]);
// loging page
Route::get('login-form', [usersController::class, "login"]);
// registation page
Route::get('registation-form', [usersController::class, "registation"]);

// add users
Route::get('add-users', [usersController::class, "index"]);
Route::post('add-users', [usersController::class, "create"]);

// Display the login form
Route::get('login', [usersController::class, 'showLoginForm'])->name('login');

// Handle the login form submission
Route::post('login', [usersController::class, 'loginfunction']);

// logout
Route::get('logout', [usersController::class, "logout"]);

// search user
Route::get('user-search', [usersController::class, "search"]);

// view user profile-admin view
Route::get('update-user/{id}', [usersController::class, "updateView"]);

// view user profile-admin view function
Route::put('update-users-done/{id}', [usersController::class, "updateDone"]);

// create pdf
Route::get('generate-pdf/{id}', [usersController::class, "generatePDF"]);


// admin -Crud
Route::get('add-admin', [AdmintblController::class, "index"]);
Route::post('add-admin', [AdmintblController::class, "create"]);
Route::get('view-admin', [AdmintblController::class, "getData"]);
Route::get('admin-search', [AdmintblController::class, "search"]);




