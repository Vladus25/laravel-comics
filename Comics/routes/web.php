<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@home')-> name('home');
Route::get('/comics/{index}', 'TestController@comics') -> name('comics');
