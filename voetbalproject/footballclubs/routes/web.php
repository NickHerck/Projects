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

Route::get('/', 'ClubController@index');

Route::prefix('club')->group(function () {
    Route::get('/new', function () {
        return view('club-add');
    });
    Route::get('/delete/{clubName}', 'ClubController@delete');
    Route::get('/detail/{clubName}', 'ClubController@detail')->name('club-detail');
    Route::get('/deletePlayer/{id}', 'ClubController@deletePlayer')->where('id', '[0-9]+');

    Route::patch('/{clubName}/update', 'ClubController@update');

    Route::post('/add', 'ClubController@add');
    Route::post('/filter', 'ClubController@filterPlayers');
    Route::post('/filter/top3', 'ClubController@filterTopScores');
});


Route::prefix('player')->group(function () {
    Route::get('/{id}', 'PlayerController@detail')->where('id', '[0-9]+');
    Route::patch('/{id}/update', 'PlayerController@update');
    Route::get('/new/{clubName?}', 'PlayerController@addPlayerView');
    Route::post('/add', 'PlayerController@add');
});
