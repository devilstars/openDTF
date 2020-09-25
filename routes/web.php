<?php

Route::post('login', 'Api\UserController@auth')->name('user.auth.login');
//Route::get('/{any}', 'SpaController@index')->where('any', '^(?!api).*$');
