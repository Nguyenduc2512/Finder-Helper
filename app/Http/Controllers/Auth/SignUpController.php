<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Services\UserService;
use App\Models\User;

class SignUpController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function show()
    {
        return view('client.loginUser.sign-up');
    }

    protected function create(SignUpRequest $request)
    {
        $this->userService->create($request);

         return redirect()->route('login');
    }
}
