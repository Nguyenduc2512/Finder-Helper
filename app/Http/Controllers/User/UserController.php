<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use App\Services\UserService;
use App\Http\Requests\UserRequests;
use App\Services\ChangePasswordService;
use App\Services\PostService;
use App\Http\Requests\LostPasswordRequest;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->userService->savePassword($request);

        return redirect()->route('user.change-password');

    }

    public function updateProfile(UserRequests $request)
    {
        $this->userService->updateProfile($request);

        return redirect()->route('profile');
    }

}
