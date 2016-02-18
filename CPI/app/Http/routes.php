<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login',
        ['as' => 'loginUser', 'uses' => 'PageController@showLogin']);

    Route::get('myStocks',
        ['as' => 'myStocks', 'uses' => 'PageController@showMyStocks']);

    Route::post('SignUp',
    ['as' => 'signUp', 'uses' => 'UserController@createUser']);

    Route::post('SignIn',
        ['as' => 'signIn', 'uses' => 'UserController@logUserIn']);

    Route::get('logout',
        [
            'as' => 'logOut', 'uses' => 'UserController@logOut'
        ]);
    Route::get('home',
        [
            'as' => 'home', 'uses' => 'UserController@home'
        ]);
    Route::post('searchStock',
        [
            'as' => 'SearchStock', 'uses' => 'PageController@showStockSearch'
        ]);
    Route::post('addStock',
        [
        'as' => 'addStock', 'uses' => 'StockController@addStock'
        ]);
});
