<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function(){
    /**
    * todo project
    */
    Route::get('todo-get', 'TodoController@getTodos');
    Route::post('todo-add', 'TodoController@addTodo');
    Route::post('todo-del', 'TodoController@deleteTodo');
    /**
    * task project
    */
    Route::get('task-get', 'TaskController@getTasks');
    Route::post('task-add', 'TaskController@addTask');
    Route::post('task-del', 'TaskController@deleteTask');
    /**
    * item project
    */
    Route::get('item-get', 'ItemController@getItems');
});
