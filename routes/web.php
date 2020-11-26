<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendCustomerMessage;

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

/*
    Author: Jimm Inciong
    Created At: 10/11/2020
    Modified Last At: 26/11/2020
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/portfolio', 'App\Http\Controllers\PagesController@portfolio');

Route::post('/submit', 'App\Http\Controllers\UserMessagesController@store');

Route::get('/linkedin', 'App\Http\Controllers\SocialLinksController@linkedin');
Route::get('/twitter', 'App\Http\Controllers\SocialLinksController@twitter');
Route::get('/facebook', 'App\Http\Controllers\SocialLinksController@facebook');
Route::get('/instagram', 'App\Http\Controllers\SocialLinksController@instagram');

Route::get('/tc', 'App\Http\Controllers\PrivaciesController@tc');
Route::get('/pp', 'App\Http\Controllers\PrivaciesController@pp');

Route::get('/clearcache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'Cache cleared!';
});