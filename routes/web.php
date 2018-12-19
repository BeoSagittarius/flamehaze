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

/***************************BACK-END*****************************/
// Login page
/**
 * @todo: add login, register view, processLogin, processRegistration Ajax
 * use middle ware login or not, must be login to use BO
 */
Route::prefix('admin')->namespace('Admin')->group(function () {
    // Dashboard BO
    Route::resource('/', 'DashboardController');

    // Login, Register, Password Recover
    Route::namespace('Auth')->group(function () {
        // Login routes
        Route::get('login', 'LoginController@index');
        Route::post('login', 'LoginController@processLogin');

        // Register routes
        Route::get('register', 'RegisterController@index');
        Route::post('register', 'RegisterController@processRegister');

        // Password reset token routes
        Route::get('forgot-password', 'PasswordController@index');
        Route::post('forgot-password', 'PasswordController@sendToken');
        Route::get('change-password', 'PasswordController@changePassword');
        Route::post('change-password', 'PasswordController@processChangePassword');
    });

    Route::post('logout', 'Auth/LoginController@logout');

});

// Member Management

// Content management

// Quiz management

// Book management

/***************************FRONT-END*****************************/

// Count-down page

// e-Learning page

// Library book online

// Money expense management online

// Blog, photos, videos management

// Menu food online
