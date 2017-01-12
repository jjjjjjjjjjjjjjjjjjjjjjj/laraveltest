<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Message api
Route::get('/api/messages/{chatRoom}',array('uses'=>'MessageController@getByChatRoom'));
Route::post('/api/messages/{chatRoom}',array('uses'=>'MessageController@createInChatRoom'));
Route::get('/api/messages/{lastMessageId}/{chatRoom}',array('uses'=>'MessageController@getUpdates'));

// users api 

Route::get('/api/users/login/kareem',array('uses'=>'UserController@loginKareem'));
Route::get('/api/users/login/mohamed',array('uses'=>'UserController@loginMohamed'));
Route::bind('chatRoom','ChatRoom');