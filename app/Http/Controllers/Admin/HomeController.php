<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\HomeAdminService;
use App\Services\CategoryService;
use App\Services\PostService;


class HomeController extends Controller
{
    protected $homeService;
    protected $cateService;
    protected $postService;

    public function __construct(HomeAdminService $homeService, CategoryService $cateService, PostService $postService)
    {
        $this->homeService = $homeService;
        $this->cateService = $cateService;
        $this->postService = $postService;
    }

    public function index()
    {
        $categories =  $this->cateService->count();
        $bv = $this->postService->countPost();
        $post = $this->postService->countPostRequest();
        $user =  $this->homeService->index();
        return view('admin.admin',compact('post','categories', 'bv', 'user'));
    }

}
