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

Route::prefix('v1')->group(function () {
    Route::post('sign-in', 'api\UserController@login');
    Route::post('sign-up', 'api\UserController@register');

    /*Authenticated routes */
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', 'api\UserController@logout');
        /*user related api*/
        Route::get('user-info', 'api\UserController@userDetails');
        Route::get('user-info/{user}', 'api\UserController@userDetailsById')->middleware('permission:users.view');
        Route::get('user-list', 'api\UserController@userList')->middleware('permission:users.view');
        Route::post('administrator/users/create', 'api\UserController@userCreate')->middleware('permission:users.create');
        Route::put('administrator/users/{user}', 'api\UserController@userEdit')->middleware('permission:users.edit');
        Route::delete('administrator/users/{user}', 'api\UserController@userDelete')->middleware('permission:users.delete');

        /*end user related api*/

        /*role permission related api*/
        Route::get('roles-list', 'api\RolePermissionController@getRoles');
        Route::get('permissions-list', 'api\RolePermissionController@getPermissions');
        Route::get('check-permission/{permission}', 'api\UserController@checkPermission');
        /*end role permission related api*/
    });

});
