<?php

Route::auth();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home ');
});
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tracy',function (){throw new \Exception('Tracy works!');});