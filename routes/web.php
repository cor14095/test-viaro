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
  'uses' => 'WelcomeController@mainMenu'
]);

Route::get('/students', [
  'uses' => 'WelcomeController@alumnosTable'
]);

Route::get('/profesors', [
  'uses' => 'WelcomeController@profesoresTable'
]);

Route::get('/year', [
  'uses' => 'WelcomeController@gradoTable'
]);

Route::get('/class', [
  'uses' => 'WelcomeController@seccionTable'
]);

Route::post('/create', [
  'uses' => 'CrudsController@create'
]);

Route::post('/read', [
  'uses' => 'CrudsController@read'
]);
