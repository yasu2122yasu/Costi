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

//時間があればsearchとresultでコントローラーを分ける
Route::get('/', 'PlanController@search');
Route::get('/result', 'PlanController@result');
