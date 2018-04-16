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
    return view('home');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('match', ['as' => 'admin', 'uses' => 'AdminController@viewAdmin']);
    Route::post('addMatch', ['as' => 'addMatch', 'uses' => 'MatchesController@addMatch']);
    Route::post('editMatch/{data?}', ['as' => 'editMatch', 'uses' => 'MatchesController@editMatch']);
    Route::post('addTeam', ['as' => 'addTeam', 'uses' => 'TeamsController@addTeam']);
    Route::post('findMatch', ['as' => 'findMatch', 'uses' => 'MatchesController@findMatch']);
    Route::get('manageMatch', ['as' => 'manageMatch', 'uses' => 'MatchesController@manageMatch']);
    Route::post('deleteMatch/{id?}', ['as' => 'deleteMatch', 'uses' => 'MatchesController@deleteMatch']);
});

Route::get('logout', 'Auth\LoginController@logout');


//Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@viewMatches']);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('matches/{id}', ['as' => 'matches', 'uses' => 'MatchesController@show']);
Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@displayAllMatches']);
//Route::get('matches/{id?}', 'matchesController@show');

/* PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)*/
Route::get('home/{lang?}','HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
