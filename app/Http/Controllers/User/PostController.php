<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use App\Services\ApplyJobService;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    protected $postService;
    protected $userApplyService;

    public function __construct(PostService $postService,
                                ApplyJobService $userApplyService)
    {
        $this->postService = $postService;
        $this-> userApplyService = $userApplyService;
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
        $postsSameCategory = $this->postService->getPostsSameCategory($id);
        $users             = $this->postService->getPost($id)->user;
        $gender            = Config::get('helper');
        $usersApply = $this->userApplyService->userApply();
        $post->apply = false;
        if ($usersApply != null) {
            foreach ($usersApply as $userApply) {
                if ($id == $userApply->post_id) {
                    $post->apply = true;
                }
            }
        }

        return view('client.job_detail', compact('post', 'gender', 'users', 'postsSameCategory'));
    }

}
