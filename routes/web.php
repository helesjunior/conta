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
    return redirect('/inicio');
});

//Route::get('/home', function () {
//    return redirect('/inicio');
//});


Route::group(
    [
        'middleware' => 'web',
        'prefix'     => config('backpack.base.route_prefix'),
    ],
    function () {
        // if not otherwise configured, setup the auth routes
        if (config('backpack.base.setup_auth_routes')==false) {
            // Authentication Routes...
            Route::get('login', 'Auth\LoginController@showLoginForm')->name('backpack.auth.login');
            Route::post('login', 'Auth\LoginController@login');
            Route::get('logout', 'Auth\LoginController@logout')->name('backpack.auth.logout');
            Route::post('logout', 'Auth\LoginController@logout');

            // Registration Routes...
            //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('backpack.auth.register');
            //Route::post('register', 'Auth\RegisterController@register');

            // Password Reset Routes...
            //Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
            //Route::post('password/reset', 'Auth\ResetPasswordController@reset');
            //Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
            //Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');
        }

        // if not otherwise configured, setup the dashboard routes
        if (config('backpack.base.setup_dashboard_routes')==false) {
//            Route::get('dashboard', function (){
//                return redirect('/inicio');
//            });
            Route::get('/', 'AdminController@redirect')->name('backpack');
        }

        // if not otherwise configured, setup the "my account" routes
        if (config('backpack.base.setup_my_account_routes')==false) {
            //Route::get('edit-account-info', 'MyAccountController@getAccountInfoForm')->name('backpack.account.info');
            //Route::post('edit-account-info', 'MyAccountController@postAccountInfoForm');
            //Route::post('change-password', 'MyAccountController@postChangePasswordForm')->name('backpack.account.password');
        }
    });
