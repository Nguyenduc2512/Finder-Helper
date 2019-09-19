<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function create()
    {
        $category = $this->postService->getCategories();
        $location = $this->postService->getLocations();

        return view('client.formClient.new_post', compact('category', 'location'));

    }

    public function store(NewPostRequest $request)
    {
        $this->postService->store($request);

        return redirect()->route('user.profile');
    }

    public function detail($id)
    {
        $post              = $this->postService->getPost($id);
        $categories        = $this->postService->getPost($id)->category;
        $postsSameCategory = $this->postService->getPostsSameCategory($id);
        $users             = $this->postService->getPost($id)->user;
        $gender            = Config::get('helper');

        return view('client.job_detail', compact('post', 'gender', 'users', 'categories', 'postsSameCategory'));
    }
}
