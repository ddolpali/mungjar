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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@index'
]);

Route::get('hire', [
    'as' => 'hire',
    'uses' => 'PageController@hire'
]);

Route::get('portfolio', [
    'as' => 'portfolio',
    'uses' => 'PageController@portfolio'
]);

Route::get('tos', [
    'as' => 'tos',
    'uses' => 'PageController@tos'
]);

Route::get('faq', [
    'as' => 'faq',
    'uses' => 'PageController@faq'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PageController@contact'
]);
