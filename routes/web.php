<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', 'general@about');


Route::get('/roster', 'general@roster');


Route::get('/RB', 'general@RB');


Route::get('/LB', 'general@LB');


Route::get('/WR', 'general@WR');
