<?php

Route::get('posts', 'Api\PostController@getPosts')->name('api.posts');


Route::post('auth/login', 'Api\UserController@auth')->name('user.auth.login');
Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
Route::post('auth/register', 'Api\UserController@register')->name('user.auth.register');

Route::middleware(['auth:sanctum', 'user.is_active'])->group(function () {
    Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
});
