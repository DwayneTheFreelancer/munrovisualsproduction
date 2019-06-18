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


Route::get('/', 'PagesController@index');

// Add mdbootstrap to add a better design to display projects in the portfolio

/* Make portfolio page have options 

Route::get('/portfolio-home', 'PagesController@portfolioHome');
    - Photography 
    - Graphic Art
    - Music Videos
    - Promotional ads
Route::get('/photography', 'PagesController@photography');
Route::get('/graphic-art', 'PagesController@graphicArt');
Route::get('/music-videos', 'PagesController@musicVideos');
Route::get('/promotional', 'PagesController@promotional');

*/
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
