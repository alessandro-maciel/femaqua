<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tools', 'API\toolsController@index')->name('tools.index');

Route::post('/tools', 'API\toolsController@store')->name('tools.store');
