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

Route::get('/', function () {
    App::setlocale('fr');
    return view('welcome');
});

//Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@viewMatches']);
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@viewAdmin']);
Route::post('admin/addMatch', ['as' => 'addMatch', 'uses' => 'MatchesController@addMatch']);
Route::post('admin/addTeam', ['as' => 'addTeam', 'uses' => 'TeamsController@addTeam']);
Route::post('admin/findMatch', ['as' => 'findMatch', 'uses' => 'MatchesController@findMatch']);
Route::post('admin/checkCountry', ['as' => 'checkCountry', 'uses' => 'TeamsController@checkCountry']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('matches/{id}', ['as' => 'matches', 'uses' => 'MatchesController@show']);
Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@displayAllMatches']);
//Route::get('matches/{id?}', 'matchesController@show');

/* PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)*/
Route::get('home/{lang?}','HomeController@index');