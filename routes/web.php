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

Route::get('/', function () {
//    event(new \App\Events\playGroundEvent());
//    return null;
    return view('welcome');
});
Route::resource('user',\App\Http\Controllers\UserController::class);

//Route::patch('/user1',[\App\Http\Controllers\UserController::class,'saveChange']);
Route::get('/ws',function (){
    return view('websocket');
});
Route::post('chat-message',function (\Illuminate\Http\Request $request){
event(new \App\Events\ChatMessageEvent(1,$request->message));
});
