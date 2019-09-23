<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use App\Services\UserService;
use App\Http\Requests\UserRequests;
use App\Services\ChangePasswordService;
use App\Services\PostService;
use App\Services\ApplyJobService;
use App\Http\Requests\LostPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    protected $userService;
    protected $applyJobService;

    public function __construct(UserService $userService,
                                ApplyJobService $applyJobService)
    {
        $this->userService = $userService;
        $this->applyJobService = $applyJobService;
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->userService->savePassword($request);

        return redirect()->route('user.change-password');

    }

    public function updateProfile(UserRequests $request)
    {
        $this->userService->updateProfile($request);

        return redirect()->route('user.profile');
    }

    public function applyJob(Request $request)
    {
        $this->applyJobService->applyJob($request);

        return redirect()->route('all-post')->with(['success' => Lang::get('messages.applySuccess') ]);
    }

    public function cancelApply($id)
    {
        $this->applyJobService->cancelApply($id);

        return redirect()->route('all-post')->with(['success' => Lang::get('messages.cancelSuccess') ]);
    }
}
