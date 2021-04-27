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
    return view('home');
})->name('home');

Route::namespace('Moodle')->group(function () {
    Route::get('/users', 'UsersController@index')->name('users-list');
    Route::get('/enrolled-users', 'UsersController@enrolled')->name('enrolled-users-list');
    Route::get('/courses', 'CoursesController@index')->name('courses-list');
});
