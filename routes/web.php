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

Route::get('/', function () { // /=URL
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//青い参考書のやつ
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//ゼミ
Route::get('/test','TestController@index');
Route::post('/test','TestController@post');

Route::get('/test1','ProController@index');

//project
Route::get('/project','ProjectController@project');
Route::post('/project','ProjectController@post');


Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::get('/auth/logout', 'Auth\LoginController@logout');

//Project用
Route::get('/users', 'UserController@index');

Route::get('sample/model', 'SampleController@model');

Route::get('/search', 'SearchController@getIndex');

//Route::get('sample/model', 'SampleController@model');

Route::get('/all','EmployeeController@select')->name('all');



Route::get('sample/model','SampleController@model')->name('model');
Route::get('sample/show','NinzuController@show');
