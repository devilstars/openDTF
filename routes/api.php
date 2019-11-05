<?php

//use Illuminate\Http\Request;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('articles', 'Api\ArticleController@getArticles')->name('api.articles');
