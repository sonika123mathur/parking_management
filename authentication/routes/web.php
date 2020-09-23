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


///*Auth Routes*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
///*End Auth Routes*/
Route::get('/', function (){
    return redirect()->route('login');
})->name('home');

Route::prefix('administrator')->namespace('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('home');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('', 'UserController@index')->middleware('permission:users.view')->name('index');
        Route::get('create', 'UserController@create')->middleware('permission:users.create')->name('create');
        Route::post('users', 'UserController@store')->middleware('permission:users.create')->name('store');
//        Route::get('{user}', 'UserController@show')->middleware('permission:users.view')->name('show');
        Route::get('{user}/edit', 'UserController@edit')->middleware('permission:users.edit')->name('edit');
        Route::put('{user}', 'UserController@update')->middleware('permission:users.edit')->name('update');
        Route::delete('{user}', 'UserController@destroy')->middleware('permission:users.delete')->name('destroy');
    });

    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('', 'RoleController@index')->middleware('permission:roles.view')->name('index');
        Route::get('create', 'RoleController@create')->middleware('permission:roles.create')->name('create');
        Route::post('roles', 'RoleController@store')->middleware('permission:roles.create')->name('store');
//        Route::get('{role}', 'RoleController@show')->middleware('permission:roles.view')->name('show');
        Route::get('{role}/edit', 'RoleController@edit')->middleware('permission:roles.edit')->name('edit');
        Route::put('{role}', 'RoleController@update')->middleware('permission:roles.edit')->name('update');
        Route::delete('{role}', 'RoleController@destroy')->middleware('permission:roles.delete')->name('destroy');
    });

    Route::prefix('parking')->name('parking.')->group(function () {
        Route::get('', 'ParkingController@index')->middleware('permission:parking.view')->name('index');
        Route::get('create', 'ParkingController@create')->middleware('permission:parking.create')->name('create');
        Route::post('parking', 'ParkingController@store')->middleware('permission:parking.create')->name('store');
        Route::get('{parking}', 'ParkingController@show')->middleware('permission:parking.view')->name('show');
        Route::get('{parking}/edit', 'ParkingController@edit')->middleware('permission:parking.edit')->name('edit');
        Route::put('{parking}', 'ParkingController@update')->middleware('permission:parking.edit')->name('update');
        Route::delete('{parking}', 'ParkingController@destroy')->middleware('permission:parking.delete')->name('destroy');
    });
});

//Route::resource('parking', 'ParkingController');
