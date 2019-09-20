<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(){

        $users = $this->userService->getUsers();
        $gender = Config::get('helper');

        return view("admin.user.list_user",compact('gender', 'users'));
    }
}
