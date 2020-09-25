<?php

use Illuminate\Support\Facades\Route;

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




Route::post('/bot', function () {

    Route::group(['middleware' => 'TextBotMiddleware'], function ()
    {
        $update = Telegram::commandsHandler(true);


    });
});

Route::get('/', 'BordController@index');
