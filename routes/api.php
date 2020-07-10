<?php

/* posts */
Route::get('posts', 'Api\PostController@getPosts')->name('api.posts');
/* end of category post */

/* categories */
Route::get('categories', 'Api\CategoryController@getCategories')->name('api.categories');
/* end of categories*/

/* auth endpoint */
Route::post('auth/login', 'Api\UserController@auth')->name('user.auth.login');
//Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
Route::post('auth/register', 'Api\UserController@register')->name('user.auth.register');
/* end of auth endpoints */

Route::middleware(['auth:sanctum', 'user.is_active'])->group(function () {
    Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
});
