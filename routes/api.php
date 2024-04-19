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

Route::group([
    'prefix' => 'V1/AP',
    'namespace' => 'App\Http\Controllers\API\V1\AP',
], function ($router) {

    Route::post('upload/file', 'FileUploadController@upload');

    //user login
    Route::post('login', 'LoginController@login');
    Route::post('forget', 'LoginController@forget');
    Route::post('reset', 'LoginController@reset');
    Route::post('logoutActivityLog', 'LoginController@logoutActivityLog');

    Route::middleware(['roleauth'])->group(function () {

            //Location
            Route::get('state', 'LocationController@getState');
            Route::get('country', 'LocationController@country');
            Route::get('city', 'LocationController@getCity');

            Route::post('userupdateFcmToken', 'LoginController@userupdateFcmToken');

            //Activity Log
            Route::get('logactivity/list', 'LogActivityContoller@logactivity_list');
            Route::get('logactivitytype/list', 'LogActivityContoller@logactivitytype_list');

            //Role
            Route::get('role/list', 'RoleController@role_list');
            Route::get('role/view/{id}', 'RoleController@role_view');

            //User
            Route::get('user/list', 'UserController@user_list');
            Route::get('user/view/{id}', 'UserController@user_view');

            //RolePermission
            Route::post('rolepermission/update', 'RolePermissionController@role_permissionupdate');
            Route::get('rolepermission/list', 'RolePermissionController@role_permissionlist');

            Route::middleware(['permauth'])->group(function () {

                    Route::post('changepassword', 'LoginController@changepassword');
                    Route::get('view/{id}', 'LoginController@user_viewprofile');

                    //User
                    Route::post('user/create', 'UserController@user_create');
                    Route::post('user/update', 'UserController@user_update');
                    Route::post('user/status', 'UserController@user_status');
                    Route::post('user/delete', 'UserController@user_delete');

                    //Role
                    Route::post('role/create', 'RoleController@role_create');
                    Route::post('role/update', 'RoleController@role_update');
                    Route::post('role/status', 'RoleController@role_status');
                    Route::post('role/delete', 'RoleController@role_delete');
            });
    });
});