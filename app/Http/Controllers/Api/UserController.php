<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserAuthRequest;
use App\Http\Services\UserService;
use App\User;
use Hash;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param UserAuthRequest $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function auth(UserAuthRequest $request) {
        /**
         * проверка на существование пользователя в базе
         */
        try {
            $user = $this->userService->getUserByEmail($request);
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
        if (!$this->userService->checkUserPasswordHash($request, $user)) {
            $response = [
                'status' => 404,
                'message' => 'Пользователь с такой электронной почтой или паролем не найден'
            ];
            return response($response, 404);
        };

        /**
         * если всё ок - создать токен
         * TODO назначить настоящие разрешения
         * TODO разрешения согласно ролям
         */
        $token = $user->createToken('user', [
            'test:show'
        ]);

        /**
         * Отправить токен в ответ
         */
        return [
            'token' => $token->plainTextToken,
            'email' => $user->email,
            'name' => $user->name,
            'abilities' => $token->accessToken->abilities
        ];
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function logout(Request $request) {
        $user = $request->user();
        $user->tokens()->delete();
        return true;
    }
}
