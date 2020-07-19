<?php

use Illuminate\Support\Facades\Route;


Route::get('/','castingController@casting');

Route::post('/sendcv','castingController@send')->name('sendbutton');

// Login page (admin)
Route::get('/adminlogin','AdminController@index');
Route::post('/adminlogin','Auth\LoginController@login')->name('login'); //login button

//logOut (admin)
Route::post('/adminlogout','Auth\LoginController@logout')->name('adminlogout'); //logout button

// Admin dashboard (view all casters applications)
Route::get('/dashboard','dashboardController@index')->middleware('auth');

// single caster view
Route::get('/view/{id}','dashboardController@view')->middleware('auth');

 
 