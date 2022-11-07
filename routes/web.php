<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

// Login-Register Controller
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');

Route::get('/login', [AuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [AuthController::class, 'logout']);

// Registered User Access
Route::get('/home', [AuthController::class, 'home']);
Route::get('/main', [AuthController::class, 'main']);
Route::get('/about', [AuthController::class, 'about']);
Route::get('/contact', [AuthController::class, 'contact']);
Route::get('/categories', [AuthController::class, 'categories']);
Route::get('/faq', [AuthController::class, 'faq']);
Route::get('/view-post', [AuthController::class, 'viewPost']);
Route::get('/profile-page', [AuthController::class, 'profilePage'])->middleware('isLoggedIn');

// Admin User Access
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/view-categories', [AuthController::class, 'viewCategories']);
Route::get('/view-users', [AuthController::class, 'viewUsers']);
Route::get('/add-category', [AuthController::class, 'addCategory']);
Route::get('/update-category', [AuthController::class, 'updateCategory']);
Route::get('/update-user', [AuthController::class, 'updateUser']);
