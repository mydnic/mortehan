<?php

Route::get('travel/current', 'Api\TravelController@current');

// Auth
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
