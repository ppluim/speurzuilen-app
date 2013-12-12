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

Route::get('/', 'HomeController@getStart');
Route::get('start', array('as'=>'start', 'uses'=>'HomeController@getStart'));
Route::get('help', array('as'=>'help','uses'=>'HomeController@getHelp'));

Route::resource('pages.questions', 'QuestionsController');
Route::resource('pages', 'PagesController');
// Route::resource('pages.questions', 'QuestionsController');
Route::resource('pages.questions.options', 'OptionsController');

Route::get('login', 'UsersController@getLogin');
Route::post('login', 'UsersController@postLogin');
Route::get('admin', 'AdminController@getIndex');
Route::get('logout', 'UsersController@logout');



