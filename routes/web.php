<?php

use Illuminate\Support\Facades\Route;


Route::get('/casting','castingController@casting');

Route::post('/sendcv','castingController@send')->name('sendbutton');
// Route::get('/', function () {
//     return view('welcome');
// });
