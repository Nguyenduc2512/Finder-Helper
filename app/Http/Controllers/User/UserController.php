<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequests;
use App\Services\ChangePasswordService;

class UserController extends Controller
{
    protected $changePassword;

    public function __construct(ChangePasswordService $changePassword)
    {
        $this->changePassword = $changePassword;
    }

    public function savePassword(ChangePasswordRequests $request)
    {
        $this->changePassword->savePassword($request);
        
        return redirect()->route('user.change-password');
    }

}
