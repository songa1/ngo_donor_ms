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

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.analytics');
});

Route::resource('/dashboard/ngos', 'NgosController');

Route::resource('/dashboard/beneficiaries', 'BeneficiariesController');

Route::resource('/dashboard/donors', 'DonorsController');

Route::resource('/dashboard/funds', 'FundsController');

// Route::resource('/dashboard/employees', 'EmployeesController');

Route::get('/dashboard/settings', function () {
    return view('dashboard.settings');
});
