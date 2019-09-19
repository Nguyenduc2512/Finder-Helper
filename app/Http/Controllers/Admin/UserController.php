<?php

namespace App\Http\Controllers\Admin;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getUsers();
        $gender = Config::get('helper');
        return view('admin.user.list_user', compact('users', 'gender'));
    }

    public function showFinder()
    {
        $users = $this->userService->getUsersFinder();
        $gender = Config::get('helper');
        return view('admin.user.list-finder', compact('users', 'gender'));
    }

    public function showHelper()
    {
        $users = $this->userService->getUsersHelper();
        $gender = Config::get('helper');
        return view('admin.user.list-finder', compact('users', 'gender'));
    }

}
