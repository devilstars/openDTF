<?php

/* posts */
Route::get('posts', 'Api\PostController@getPosts')->name('api.posts');
/* end of category post */

/* categories */
Route::get('categories', 'Api\CategoryController@getCategories')->name('api.categories');
/* end of categories*/

/* auth endpoints */
//Route::post('auth/login', 'Api\UserController@auth')->name('user.auth.login');

Route::post('auth/register', 'Api\UserController@register')->name('user.auth.register');
/* end of auth endpoints */

Route::middleware(['auth:sanctum'])->group(function () {
    /* auth endpoints */
    Route::get('user', 'Api\UserController@user')->name('user.auth.login');
    Route::post('auth/logout', 'Api\UserController@logout')->name('user.auth.logout');
    /* end of auth endpoints */
});

Route::middleware(['auth:sanctum', 'user.is_active'])->group(function () {
    Route::post('dashboard/users', 'Api\AdminUserController@list')->name('dashboard.users');
});
