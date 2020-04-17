<?php

//use Illuminate\Http\Request;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('posts', 'Api\PostController@getPosts')->name('api.posts');

Route::post('auth/login', 'Api\UserController@auth')->name('user.auth.login');
