<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('iniciogeneral');
});

Route::resource('products', ProductController::class);

//Rutas para Logearse
Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//backend admin
Route::view('admin', 'admin.login_admin')->name('admin');
// Route::view('admin', 'admin.dashboard_admin')->name('admin');