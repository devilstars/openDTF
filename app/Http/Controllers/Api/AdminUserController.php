<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function list(Request $request) {
        return User::query()->paginate(1);
    }
}
