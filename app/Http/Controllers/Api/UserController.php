<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserAuthRequest;
use App\User;
use Hash;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function auth(UserAuthRequest $request) {
        /**
         * проверка на существование пользователя в базе
         */
        try {
            $user = app()->make('UserService')->getUserByEmail($request);
        } catch (\Exception | \Throwable $e) {
            $response = [
                'status' => 404,
                'message' => 'Пользователь с такой электронной почтой или паролем не найден'
            ];
            return response($response, 404);
        }

        /**
         * если пользователь найден по его email - проверить пароль
         */
        /** @var User $user */
        if (!app()->make('UserService')->checkUserPasswordHash($request, $user)) {
            $response = [
                'status' => 404,
                'message' => 'Пользователь с такой электронной почтой или паролем не найден'
            ];
            return response($response, 404);
        };

        /**
         * если всё ок - создать токен
         */
        $token = $user->createToken('token-name');
        return $token->plainTextToken;
    }
}
