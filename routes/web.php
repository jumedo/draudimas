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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cars', 'CarController@carList')->name('carList');
Route::get('/addCar', 'CarController@addCar')->name('addCar');
Route::post('/addCar', 'CarController@insertCar')->name('insertCar');
Route::get('/editCar/{id}', 'CarController@editCar')->name('editCar');
Route::post('/updateCar/{id}', 'CarController@updateCar')->name('updateCar');
Route::get('/deleteCar/{id}', 'CarController@deleteCar')->name('deleteCar');

Route::get('/owner', 'OwnerController@ownerList')->name('ownerList');
Route::get('/addOwner', 'OwnerController@addOwner')->name('addOwner');
Route::post('/addOwner', 'OwnerController@insertOwner')->name('insertOwner');
Route::get('/editOwner/{id}', 'OwnerController@editOwner')->name('editOwner');
Route::post('/updateOwner/{id}', 'OwnerController@updateOwner')->name('updateOwner');
Route::get('/deleteOwner/{id}', 'OwnerController@deleteOwner')->name('deleteOwner');


//Route::middleware('auth')->group(function (){
//    Route::get('/cars', 'CarController@carList')->name('carList');
//});
