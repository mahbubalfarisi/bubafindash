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

Route::get('/asset', function () {
    return view('asset');
});

Route::get('/finplan', function () {
    return view('finplan');
});

Route::get('/cashflow', function () {
    return view('cashflow');
});

Route::get('/gold', function () {
    return view('gold');
});

Route::get('/insight', ['uses' => 'CalcController@insightview']);
Route::get('/mandiri/index', ['uses' => 'MandiricalcController@mandiriview']);
Route::get('/cashes/index', ['uses' => 'CashcalcController@cashview']);
Route::get('/ovo/index', ['uses' => 'OvocalcController@ovoview']);
Route::get('/jenius/index', ['uses' => 'JeniuscalcController@jeniusview']);
Route::get('/flexi/index', ['uses' => 'FlexicalcController@flexiview']);
Route::get('/gopay/index', ['uses' => 'GopaycalcController@gopayview']);
Route::get('/cryptos/index', ['uses' => 'CryptocalcController@cryptoview']);
Route::get('/mtrs/index', ['uses' => 'MtrcalcController@mtrview']);

Route::resource('debts', 'DebtController');
Route::resource('mandiri', 'MandiriController');
Route::resource('cashes', 'CashController');
Route::resource('ovo', 'OvoController');
Route::resource('jenius', 'JeniusController');
Route::resource('flexi', 'FlexiController');
Route::resource('linkaja', 'LinkajaController');
Route::resource('gopay', 'GopayController');
Route::resource('cryptos', 'CryptoController');
Route::resource('mtrs', 'MtrController');