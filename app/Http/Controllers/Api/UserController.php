<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function auth(Request $request) {
        try {
            $user = User::query()->where('email', $request->input('email'))->firstOrFail();
        } catch (\Exception $e) {
            $response = [
                'status' => 404,
                'message' => 'Пользователь не найден'
            ];
            return response($response, 500);
        }

        $token = $user->createToken('token-name');
        return $token->plainTextToken;
    }
}
