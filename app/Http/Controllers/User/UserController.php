<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequests;
use App\Services\UserService;
use App\Http\Requests\UserRequests;
use App\Services\ApplyJobService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    protected $userService;
    protected $applyJobService;
    protected $postService;

    public function __construct(UserService $userService,
                                ApplyJobService $applyJobService,
                                PostService $postService)
    {
        $this->userService = $userService;
        $this->applyJobService = $applyJobService;
        $this->postService = $postService;
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

        return redirect()->route('user.profile')
                         ->with(['success' => Lang::get('messages.applySuccess') ]);
    }

    public function cancelApply($id)
    {
        $this->applyJobService->cancelApply($id);

        return redirect()->route('all-post')
            ->with(['success' => Lang::get('messages.cancelSuccess') ]);
    }

    public function deletePost($id)
    {
        $this->postService->deletePost($id);

        return redirect()->route('user.profile')
            ->with(['success' => Lang::get('messages.delete') ]);
    }

    public function acceptUser(Request $request, $id)
    {
        $this->applyJobService->acceptUser($request, $id);

        return redirect()->route('user.apply-request', ['id' => $request->post_id])
                         ->with(['success' => Lang::get('messages.accept') ]);
    }

    public function declineUser(Request $request, $id)
    {
        $this->applyJobService->declineUser($request, $id);

        return redirect()->route('user.apply-request', ['id' => $request->post_id])
                         ->with(['success' => Lang::get('messages.decline') ]);
    }

    public function ownerSuccess($id)
    {
        $this->applyJobService->ownerSuccess($id);
        $this->postService->ownerCheckStatusPost($id);

        return redirect()->route('user.apply-request', ['id' => $id])
                         ->with(['success' => Lang::get('messages.success') ]);
    }

    public function helperConfirm($id)
    {
        $userApply = $this->applyJobService->helperConfirm($id);
        $this->postService->userCheckStatusPost($id);

        return redirect()->route('user.confirm-success', ['id' => $userApply->post_id])
            ->with(['success' => Lang::get('messages.success') ]);
    }
}
