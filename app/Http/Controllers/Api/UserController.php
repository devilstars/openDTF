<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserAuthRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function auth(UserAuthRequest $request) {
        try {
            $user = User::query()->where('email', $request->input('email'))->firstOrFail();
        } catch (\Exception $e) {
            $response = [
                'status' => 404,
                'message' => 'Пользователь с такой электронной почтой или паролем не найден'
            ];
            return response($response, 404);
        }

        $token = $user->createToken('token-name');
        return $token->plainTextToken;
    }
}
