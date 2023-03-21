<?php

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


Route::view('/', 'login');

Route::view('/register', 'register');

Route::view('/welcome', 'welcome');

Route::prefix('dashboard')->group(function () {

    Route::resource('/beneficiaries', 'App\Http\Controllers\BeneficiariesController');

    Route::resource('/donors', 'App\Http\Controllers\DonorsController');

    Route::resource('/funds', 'App\Http\Controllers\FundsController');

    Route::resource('/employees', 'App\Http\Controllers\EmployeesController');

    Route::view('/settings', 'dashboard.settings');
    
    Route::view('/', 'dashboard.analytics');

    Route::resource('ngos', 'App\Http\Controllers\NgosController');
    
});

