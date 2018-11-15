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

Route::get('/', 'PageController@home');
Route::get('/help', 'PageController@help');
Route::get('/messages', 'PageController@messages');
Route::get('/signin', 'PageController@signin');
Route::get('/shopcar', 'PageController@shopcar');

// Route::resource('/cars', 'Car_modelsController');
Route::get('/cars/{name}/show', 'Car_modelsController@show');
Route::get('/bikes/{name}/show', 'Bike_modelsController@show');
Route::get('/laptops/{name}/show', 'Laptop_modelsController@show');
Route::resource('/tvs', 'Tv_modelsController');

// Route::get('/brands', 'Car_brandsController@index');
// Route::resource('brands', 'Bike_brandsController');
Route::get('/', 'Product_brandsController@index');
Route::resource('projects', 'ProjectsController');

// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');//insert into db
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update'); //update
// Route::delete('/projects/{project}', 'ProjectsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
