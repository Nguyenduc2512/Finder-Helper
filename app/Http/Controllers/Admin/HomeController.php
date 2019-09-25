<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Services\CategoryService;
use App\Services\PostService;


class HomeController extends Controller
{
    protected $userService;
    protected $cateService;
    protected $postService;

    public function __construct(UserService $userService,
                                CategoryService $cateService,
                                PostService $postService)
    {
        $this->userService = $userService;
        $this->cateService = $cateService;
        $this->postService = $postService;
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $categories =  $this->cateService->count();
        $bv = $this->postService->countPost();
        $posts = $this->postService->countPostRequest();
        $user =  $this->userService->countUser();
        return view('admin.admin',compact('posts','categories', 'bv', 'user'));
    }

}
