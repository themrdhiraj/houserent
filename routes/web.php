<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'RoomsController@index');

Route::get('/profile', 'HomeController@profile');

Route::get('/floorUpdate', 'HomeController@floorUpdate');
Route::get('/paidRents/{id}', 'RentsController@paidRents');
Route::get('/allRents', 'RentsController@allRents');


Route::get('/help', 'HomeController@help');

Auth::routes();

Route::resource('services', 'HouseServices');
Route::resource('peoples', 'PeoplesController');
Route::resource('rooms', 'RoomsController');
Route::resource('rents', 'RentsController');

Route::get('/home', 'HomeController@index');
