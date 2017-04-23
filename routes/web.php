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

Route::get('/', 'WelcomeController@index');

Route::get('/novatarefa', 'WelcomeController@getForm');
Route::post('/novatarefa', 'WelcomeController@salvaTarefa');

Route::get('/editartarefa/{id}', 'WelcomeController@editarTarefa')->name('getEdit');
Route::put('/editartarefa/{id}', 'WelcomeController@salvarEdicao')->name('putEdit');
Route::delete('/delete/{id}', 'WelcomeController@delete')->name('delete');
