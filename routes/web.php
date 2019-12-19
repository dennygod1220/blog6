<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'],function(){
    Route::get('/admin','UserController@admin');

});
