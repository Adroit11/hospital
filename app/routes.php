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

Route::get('/', function()
{
    //return View::make('hello');
    return View::make('dashboard');
});

Route::get('dashboard', function(){
    return View::make('dashboard');
});

Route::get('login', 'LogController@getLogin');
Route::post('login', 'LogController@postLogin');
Route::post('logout', 'LogController@postLogout');
Route::get('logout', 'LogController@getLogout');

Route::resource ('user','UserController');

Route::resource ('patient','PatientController');

Route::resource ('consultation','ConsultationController');

Route::resource ('payment','PaymentController');

Route::resource ('item','ItemController');

Route::resource ('result','ResultController');

Route::resource ('paymentlist','PaymentListController');

Route::resource ('sponser','SponserController');
