<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
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


// Route::get('/users', [AuthorController::class, 'saveMessage']);


Route::group(['middleware' => ['web'],'prefix' => 'author', 'namespace' => 'App\Http\Controllers'], function () {

    Route::post('msg','AuthorController@saveMessage');
    Route::get('get','AuthorController@getAuthorData');
    Route::get('get/{id}','AuthorController@getAuthorDataByID');

});
