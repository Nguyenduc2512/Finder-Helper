<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use App\Services\UserService;
use App\Http\Requests\UserRequests;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->changePassword->savePassword($request);

        return redirect()->route('user.change-password');

    }

    public function updateProfile(UserRequests $request)
    {
        $this->userService->updateProfile($request);

        return redirect()->route('profile');
    }
}
