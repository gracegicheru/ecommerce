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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'RegisterController@Register');
Route::post('/registerUser', 'RegisterController@registerUser');
Route::get('/', 'LoginController@Login');
Route::post('/verifyUser','LoginController@verifyUser');
Route::post('/otp','LoginController@VerifyOtp');
Route::get('/dashboard', 'DashboardController@Dashboard');
Route::get('/supplier','SupplierController@displaySupplier');
Route::post('/addsupplier','SupplierController@AddSupplier');
Route::post('/deletesupplier','SupplierController@deleteSupplier');
Route::post('/editsupplier','SupplierController@editSupplier');
//Route::get('/otp','LoginController@generateOtp');