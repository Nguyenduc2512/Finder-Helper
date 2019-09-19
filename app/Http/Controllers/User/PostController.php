<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
