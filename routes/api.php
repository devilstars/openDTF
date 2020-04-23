<?php

//use Illuminate\Http\Request;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('posts', 'Api\PostController@getPosts')->name('api.posts');

Route::post('test', function() {
    header('Access-Control-Allow-Origin: http://test.test, http://localhost:3000');
    dd('test');
})->middleware(['cors']);

Route::post('auth/login', 'Api\UserController@auth')->name('user.auth.login');
Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
});
