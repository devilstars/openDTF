<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserAuthRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Services\UserService;
use App\User;
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
     * @return bool|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function auth(UserAuthRequest $request)
    {
        /**
         * проверка на существование пользователя в базе
         */
//        try {
//            $user = $this->userService->getUserByEmail($request);
//        } catch (\Exception | \Throwable $e) {
//            $response = [
//                'status' => 404,
//                'message' => 'Пользователь не найден'
//            ];
//            return response($response, 404);
//        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = auth()->user();
        } else {
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
//        if (!$this->userService->checkUserPasswordHash($request, $user)) {
//            $response = [
//                'status' => 404,
//                'message' => 'Пользователь с такой электронной почтой или паролем не найден'
//            ];
//            return response($response, 404);
//        };

        if (!$user->is_active) {
            $response = [
                'status' => 403,
                'message' => 'Пользователь не активирован'
            ];
            return response($response, 403);
        }

        /**
         * если всё ок - создать токен
         */
//        $token = $user->createToken('user', $user->abilities ? json_decode($user->abilities) : []);

        /**
         * Отправить токен в ответ
         */
//        return [
//            'token' => $token->plainTextToken,
//            'email' => $user->email,
//            'name' => $user->name,
//            'abilities' => $token->accessToken->abilities
//        ];
        return true;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function user(Request $request) {
//        $response = [
//            'status' => 401,
//            'message' => 'Доступ запрещён'
//        ];
//        return response($response, 401);

        return $request->user();
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return true;
    }

    public function register(UserRegisterRequest $request)
    {
        try {
            $user = $this->userService->createUser($request);
        } catch (\Exception | \Throwable $e) {
            $response = [
                'status' => 404,
                'message' => 'Произошла ошибка. Попробуйте зарегистрироваться позднее.'
            ];
            return response($response, 404);
        }

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
}
