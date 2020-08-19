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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/tasks', 'TaskController@index')->name('task');
// Route::get('/todos', 'TodoController@index')->name('todo');
/*認証あり*/
// Route::get('/tasks', 'TaskController@index')->name('task')->middleware('auth');
// Route::get('/todos', 'TodoController@index')->name('todo')->middleware('auth');
Route::get('/modal', 'ModalController@index')->name('modal');
Route::get('/items', 'ItemController@index')->name('item');
Route::get('/items/details', 'ItemController@details');
Route::get('/tasks', 'TaskController@index')->name('task');
Route::get('/todos', 'TodoController@index')->name('todo');
/*
Route::get('/{any}', function($any){
    return view($any.'/index');
})->where('any','.*');
*/
