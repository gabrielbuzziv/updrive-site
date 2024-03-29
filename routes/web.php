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

/**
 * HomeController
 */
Route::get('/', 'HomeController@index');
Route::post('/enviar', 'HomeController@sendMail');

/**
 * DemoController
 */
Route::get('solicitar-demonstracao', 'DemoController@index');
Route::post('solicitar-demonstracao', 'DemoController@request');
