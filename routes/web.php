<?php

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
    return view('login');
});

Route::get('/insight', function () {
    return view('insight');
});

Route::get('/debt', function () {
    return view('debt');
});

Route::get('/asset', function () {
    return view('asset');
});

Route::get('/finplan', function () {
    return view('finplan');
});

Route::get('/cashflow', function () {
    return view('cashflow');
});

Route::get('/mandiri', function () {
    return view('mandiri');
});

Route::get('/gold', function () {
    return view('gold');
});

Route::resource('debts', 'DebtController');