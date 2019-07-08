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

// WORK ON DROP DOWN TABS 





// Main Pages
Route::get('/', 'PagesController@index');
// Media will be the button to routes music-videos, promotional, interviews
//Route::get('/media', 'PagesController@media');
Route::get('/music-videos', 'PagesController@musicVideos');
Route::get('/promotional', 'PagesController@promotional');
Route::get('/interviews', 'PagesController@interviews');
// Photography/Art will be the button to routes photography and graphic-art
//Route::get('/photography-art', 'PagesController@photographyArt');
Route::get('/photography', 'PagesController@photography');
Route::get('/graphic-art', 'PagesController@graphicArt');

Route::get('/services', 'PagesController@services');
Route::get('/news', 'PagesController@news');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


Route::get('/portfolio', 'PagesController@portfolio');


// Services Payments Processes
// After client Payment completes it will redirect them to confirmation page to finish booking appointment through Google Forms 
Route::get('/confirmation', 'PagesController@confirmation');



