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
      $viber = new \Thurka\Viber\Viber();
//      $viber->sentMessage(12345, 'hii');
        $viber->getInfo();
//      $viber->getDetail();
    return view('welcome');
});

//Route::get('/', 'Viber@home');
//Route::get('getUpdates',   'Viber@getUpdates');
//Route::get('send',  'TelegramController@getSendMessage');
//Route::post('send', 'TelegramController@postSendMessage');




//Route::get('viber/',
//    'thurka\viber\Viber@home');



