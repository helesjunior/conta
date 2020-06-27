<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', ''),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes

    if (config('backpack.base.setup_dashboard_routes')==false) {
        Route::get('inicio', 'AdminController@index')->name('backpack.inicio');
        Route::get('/', 'AdminController@redirect')->name('backpack');
//        Route::get('/dashboard', 'AdminController@redirect')->name('backpack');
    }


    Route::crud('estados', 'EstadosCrudController');
}); // this should be the absolute last line of this file
