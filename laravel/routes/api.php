<?php

Route::get('/', 'Api\HomeController@index')->name('home.index');

Route::post('db', 'Api\HomeController@storeDb')->name('home.store.db');
Route::get('db', 'Api\HomeController@getDb')->name('home.get.db');

Route::post('cache', 'Api\HomeController@storeCache')->name('home.store.cache');
Route::get('cache', 'Api\HomeController@getCache')->name('home.get.cache');
