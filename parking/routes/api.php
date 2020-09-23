<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(function () {
    Route::get('/parking-list', 'ParkingController@index');
    Route::get('/parking/{parking}', 'ParkingController@show');
    Route::post('/create-parking', 'ParkingController@store');
    Route::put('/update-parking/{parking}', 'ParkingController@parkingEdit');
    Route::delete('/delete-parking/{parking}', 'ParkingController@parkingDelete');
    Route::post('/save-distance-to-server', 'ParkingController@saveDistanceToServer');
});
