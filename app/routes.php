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


Route::resource('pages', 'PagesController');
// Route::resource('pages.questions', 'QuestionsController');
Route::resource('questions', 'QuestionsController');
Route::resource('options', 'OptionsController');


