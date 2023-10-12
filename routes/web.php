<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;

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
Route::get('', [ProfileController::class, "main"]);

// about
Route::get('about-form', [ProfileController::class, "about"]);

// loging page
Route::get('login-form', [ProfileController::class, "login"]);

// logout
Route::get('logout', [ProfileController::class, "logout"]);

// registation page
Route::get('registation-form', [ProfileController::class, "registation"]);

// add users
Route::get('add-users', [ProfileController::class, "index"]);
Route::post('add-users', [ProfileController::class, "create"]);

// Display the dashboards(login forms)
Route::get('login', [ProfileController::class, 'showLoginForm'])->name('login');

// Handle the login form submission
Route::post('login', [ProfileController::class, 'loginfunction']);

// search user
Route::get('user-search', [ProfileController::class, "search"]);
// admin serch view
Route::get('admin-search', [ProfileController::class, "searchView"]);

// update user profile-admin view
Route::get('update-user/{id}', [ProfileController::class, "updateView"]);

// view user profile-admin view function
Route::put('update-users-done/{id}', [ProfileController::class, "updateDone"]);

// delete user from admin
Route::get('delet-user-from-admin/{id}', [ProfileController::class, "deleteUserFromAdmin"]);

// delete user from user
Route::get('delet-user-from-user/{id}', [ProfileController::class, "deleteUserFromUser"]);


// pdf genarater
Route::get('pdf-genarater/{id}', [PDFController::class, "generatePDF"]);



