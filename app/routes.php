<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('library/addcollection'], function(){
	
});
Route::get('/library/{key_perpustakaan}/action')

Route::get('/search/{squery}', 'SearchController@search');

Route::get('/scrap', function()
{
	return "asd";
});
