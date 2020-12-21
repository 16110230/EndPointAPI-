<?php


Route::post('register', 'Api\RegisterController@action');
Route::post('login', 'Api\LoginController@action');
Route::get('me', 'Api\UserController@me')->middleware('auth:api');
Route::post('session', 'Api\SessionController@store')->middleware('auth:api');
Route::get('session', 'Api\SessionController@index');
Route::get('session/{session}', 'Api\SessionController@show');
Route::put('session/{session}', 'Api\SessionController@update')->middleware('auth:api');
Route::delete('session/{session}', 'Api\SessionController@destroy')->middleware('auth:api');