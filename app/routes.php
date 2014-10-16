<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
    return View::make('hello');
});


Route::get('my', function() {
    return 'my';

});

Route::get('testrender', 'DocumentController@renderSingle');

Route::get('t1', 'DocumentController@t1');
