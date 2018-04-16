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
Auth::routes();
Route::group(['prefix' => 'admin'], function() {
    Route::get('match', ['as' => 'admin', 'uses' => 'AdminController@viewAdmin']);
    Route::post('addMatch', ['as' => 'addMatch', 'uses' => 'MatchesController@addMatch']);
    Route::post('editMatch/{data?}', ['as' => 'editMatch', 'uses' => 'MatchesController@editMatch']);
    Route::post('addPlayer', ['as' => 'addPlayer', 'uses' => 'PlayersController@addPlayer']);
    Route::post('addTeam', ['as' => 'addTeam', 'uses' => 'TeamsController@addTeam']);
    Route::post('findMatch', ['as' => 'findMatch', 'uses' => 'MatchesController@findMatch']);
    Route::get('manageMatch', ['as' => 'manageMatch', 'uses' => 'MatchesController@manageMatch']);
    Route::post('deleteMatch/{id?}', ['as' => 'deleteMatch', 'uses' => 'MatchesController@deleteMatch']);
    Route::get('newBet/{id?}', ['as' => 'newBet', 'uses' => 'BetController@newBet']);
    Route::post('makeBet/{matchId?}/{userId?}', ['as' => 'makeBet', 'uses' => 'BetController@makeBet']);

});

Route::get('logout', 'Auth\LoginController@logout');

/* PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)*/
//Route::get('home/{lang?}','HomeController@displayMatchHome');*/
/*Route::get('home/{lang?}','HomeController@index');*/
Route::get('/', 'HomeController@displayMatchHome');
Route::get('home', 'HomeController@displayMatchHome');
Route::get('home', 'HomeController@displayTeam1');

Route::get('matches/{id}', ['as' => 'matches', 'uses' => 'MatchesController@displayMatch']);
Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@displayAllMatches']);

Route::get('teams', ['as' => 'teams', 'uses' => 'TeamsController@displayAllTeams']);
Route::get('teams/{id}', ['as' => 'teams', 'uses' => 'TeamsController@displayTeam']);

Route::get('users', ['as' => 'user', 'uses' => 'UsersController@getUserWallet']);
Route::post('users/addToWallet', ['as' => 'user', 'uses' => 'UsersController@addToWallet']);