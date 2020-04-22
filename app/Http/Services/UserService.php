<?php

namespace App\Http\Services;

use App\Http\Requests\User\UserAuthRequest;
use App\User;
use Hash;

/**
 * Class UserService
 */
class UserService
{
    /**
     * @param UserAuthRequest $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function getUserByEmail(UserAuthRequest $request)
    {
        return User::query()->where('email', $request->input('email'))->firstOrFail();
    }

    /**
     * @param UserAuthRequest $request
     * @param User $user
     * @return bool
     */
    public function checkUserPasswordHash(UserAuthRequest $request, User $user)
    {
        return Hash::check($request->input('password'), $user->password);
    }
}
