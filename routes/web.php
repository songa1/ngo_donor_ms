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

Route::get('/dashboard/ngos', function () {
    return view('dashboard.ngos');
});

Route::get('/dashboard/beneficiaries', function () {
    return view('dashboard.beneficiaries');
});

Route::get('/dashboard/donors', function () {
    return view('dashboard.donors');
});

Route::get('/dashboard/funds', function () {
    return view('dashboard.funds');
});

Route::get('/dashboard/employees', function () {
    return view('dashboard.employees');
});

Route::get('/dashboard/settings', function () {
    return view('dashboard.settings');
});
