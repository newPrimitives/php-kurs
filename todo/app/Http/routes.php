<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	/**
	 * Show Task Dashboard
	 */
	 
    Route::get('/', ['uses' => 'TaskController@index', 'as' =>'showTasks']);

    Route::post('/task', ['uses' => 'TaskController@create', 'as' =>'createTasks']);

    Route::delete('/task/{task}/delete', ['uses' => 'TaskController@delete', 'as' =>'deleteTasks']);

