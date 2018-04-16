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
Route::post('admin/editMatch/{data?}', ['as' => 'editMatch', 'uses' => 'MatchesController@editMatch']);
Route::post('admin/addTeam', ['as' => 'addTeam', 'uses' => 'TeamsController@addTeam']);
Route::post('admin/findMatch', ['as' => 'findMatch', 'uses' => 'MatchesController@findMatch']);
Route::get('admin/manageMatch', ['as' => 'manageMatch', 'uses' => 'MatchesController@manageMatch']);
Route::post('admin/deleteMatch/{id?}', ['as' => 'deleteMatch', 'uses' => 'MatchesController@deleteMatch']);

/* PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)*/
//Route::get('home/{lang?}','HomeController@displayMatchHome');*/
Route::get('/', 'HomeController@displayMatchHome');
Route::get('home', 'HomeController@displayMatchHome');
Route::get('home', 'HomeController@displayTeam1');
Route::get('home', 'HomeController@displayTeam2');

Route::get('matches/{id}', ['as' => 'matches', 'uses' => 'MatchesController@displayMatch']);
Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@displayAllMatches']);

Route::get('teams', ['as' => 'teams', 'uses' => 'TeamsController@displayAllTeams']);
Route::get('teams/{id}', ['as' => 'teams', 'uses' => 'TeamsController@displayTeam']);

