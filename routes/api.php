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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Posts
Route::post('add-text-post', 'TextPostController@store');
Route::post('update-text-post/{id}', 'TextPostController@update');
Route::post('delete-text-post/{id}', 'TextPostController@delete');
Route::post('add-video-post', 'VideoPostController@store');
Route::post('update-video-post/{id}', 'VideoPostController@update');
Route::post('delete-video-post/{id}', 'VideoPostController@delte');
Route::get('text-post', 'TextPostController@create');
Route::get('video-post', 'VideoPostController@create');
Route::get('show-video-post/{id}', 'VideoPostController@show');
Route::get('show-text-post/{id}', 'TextPostController@show');

//Comments

Route::post('add-comment', 'CommentController@store');
Route::post('add-reply', 'CommentController@replyStore');
