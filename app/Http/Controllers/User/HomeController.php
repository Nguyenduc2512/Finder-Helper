<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    protected $postService;
    protected $userService;

    public function __construct( PostService $postService,
                                 UserService $userService )
    {
        $this->postService = $postService;
        $this->userService = $userService;
    }

    public function index()
    {
        $posts    = $this->postService->getPosts();
        $newPosts  = $this->postService->getNewPosts();
        $users    = $this->userService->getUsers();
        $categories = $this->postService->getCategories();

        return view('client.index', compact('posts', 'newPosts', 'users', 'categories'));
    }

    public function profile()
    {
        $gender = Config::get('helper');

        return view('client.profile', compact('gender'));
    }

    public function category()
    {

    }

    public function allPost()
    {
        $newPosts   = $this->postService->getNewPosts();
        $users      = $this->userService->getUsers();
        $categories  = $this->postService->getCategories();
        $locations  = $this->postService->getLocations();

        return view('client.all_job', compact( 'newPosts', 'users', 'categories', 'locations'));
    }

    public function profileFinder()
    {
        $gender = Config::get('helper');

        return view('client.userFinder.profile', compact('gender'));
    }

    public function profileHelper()
    {
        $gender = Config::get('helper');

        return view('client.userHelper.profile', compact('gender'));
    }

    public function updateInfo(User $user)
    {
        return view('client.loginUser.update_info');
    }

    public function changePassword()
    {
        return view('client.formClient.change_password');
    }

    public function editProfile()
    {
        $gender = Config::get('helper');

        return view('client.formClient.edit_profile', compact('gender'));
    }
}
