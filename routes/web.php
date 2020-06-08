<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');
Route::get('/create', 'ShareController@create')->name('shares.create');
Route::post('/share', 'ShareController@store')->name('shares.store');
Route::get('/activies', 'ShareController@index')->name('shares.activies');
Route::get('/notecreate', 'NoteController@create')->name('notes.create');
Route::post('/notestore', 'NoteController@store')->name('notes.store');



