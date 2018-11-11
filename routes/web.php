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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'prefix' => 'oauth' ], function () {
	Route::get('{provider}', [
		'as'   => 'social.login',
		'uses' => 'SocialAuth\SocialAuthController@login',
	]);

	Route::get('{provider}/callback', [
		'as'   => 'social.callback',
		'uses' => 'SocialAuth\SocialAuthController@callback',
	]);
});

Route::group(['prefix' => 'job'], function () {
    Route::get('/', 'JobController@index')->name('all-job');
    Route::get('/create', 'JobController@showFormCreate')->name('show-create-job');
    Route::post('/create', 'JobController@create')->name('save-job');
    Route::get('/results-job','JobResultController@showResultJob')->name('result-job');

});
Route::get('/search-job','JobResultController@searchJob')->name('search-job');







