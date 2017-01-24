<?php

# Static Pages. Redirecting admin so admin cannot access these pages.
Route::group(['middleware' => ['redirectAdmin']], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@getHome']);
});


# Authentication
Route::get('login', ['as' => 'login', 'middleware' => 'guest', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController' , ['only' => ['create','store','destroy']]);



# Standard User Routes
Route::group(['middleware' => ['auth','standardUser']], function()
{
    Route::get('userProtected', 'StandardUser\StandardUserController@getUserProtected');
    Route::resource('calander','CalanderController');

});


