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

/* Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/about', function () {
    return view('pages.about');
});


*/


// Using controller for displaying views
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@service');


// dynamic routing
Route::get('/user/{id}', function ($id) {
    return 'This is user with id: '.$id;
});


Route::resource('posts', 'PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
