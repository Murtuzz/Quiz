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

use Illuminate\Support\Facades\Log;

// Log::info('Web::__construct()');
Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/start_test', 'QuestionPaperController@store')->name('start_test');
Route::put('/submit_test/{id}', 'QuestionPaperController@update')->name('submit_test');
Route::post('/show_test_result', 'QuestionPaperController@show')->name('show_test_result');
