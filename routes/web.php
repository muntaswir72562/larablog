<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/','PostController@latest');

Route::get('/Allposts', 'PostController@index');

Route::get('/viewPost/{id}', 'PostController@show');
Route::get('/create','PostController@create');
Route::post('/newPost','PostController@store');
Route::delete('/post/{id}','PostController@destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
