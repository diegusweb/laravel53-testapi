<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Web\HomeController@Home');


//admin  'middleware' => ['auth'],
Route::group(['namespace' => 'Admin',  'prefix' => 'bo'], function()
{
    Route::get('dashboard', 'DashboardController@index');

    Route::get('placetypes/listall/{page?}','PlaceTypeController@listall');
    Route::resource('placetypes', 'PlaceTypeController');

    Route::get('place/listall/{page?}','PlaceController@listall');
    Route::resource('place', 'PlaceController');

});
