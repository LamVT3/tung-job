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

    Route::get('/manage', 'JobController@manage')->name('manage-job');
    Route::get('/set-featured', 'JobController@set_featured')->name('set-featured');
    Route::get('/detail/{slug}', 'JobController@detail')->name('job-detail');
    Route::get('/edit/{id}', 'JobController@showFormEdit')->name('show-edit-job');
    Route::post('/edit/{id}', 'JobController@edit')->name('edit-job');
    Route::get('/delete', 'JobController@delete')->name('delete-job');

    Route::get('/job-tag', 'JobResultController@showResultJobTag')->name('result-search-tag');

});

Route::group(['prefix' => 'company'], function () {
	Route::get('/create', 'CompanyController@showFormCreate')->name('show-create-company');
	Route::post('/create', 'CompanyController@create')->name('save-company');
	Route::get('/manage', 'CompanyController@manage')->name('manage-company');
	Route::get('/detail/{slug}', 'CompanyController@detail')->name('company-detail');
	Route::get('/edit/{id}', 'CompanyController@showFormEdit')->name('show-edit-company');
	Route::post('/edit/{id}', 'CompanyController@edit')->name('edit-company');
	Route::get('/delete', 'CompanyController@delete')->name('delete-company');

	Route::get('/','CompanyController@reviewCompany')->name('company-review');
	Route::get('/result_search', 'CompanyController@resultSearchCompany')->name('result-company');
});

Route::group(['prefix' => 'user'], function () {
	Route::get('/profile', 'UserController@applications')->name('user-profile');
	Route::get('/apply', 'UserController@apply')->name('user-apply');
	Route::get('/reset-password', 'UserController@showFormResetPassword')->name('user-show-form-reset');
	Route::post('/reset-password', 'UserController@resetPassword')->name('user-reset-pwd');
});
Route::get('/search-job','JobResultController@searchJob')->name('search-job');

Route::get('/search_company', 'CompanyController@searchReviewCompany') -> name('search-company');







