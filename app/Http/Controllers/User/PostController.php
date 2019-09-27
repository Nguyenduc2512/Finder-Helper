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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

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
        $check = Config::get('helper');

        return view('client.formClient.new_post', compact('category', 'location', 'check'));

    }

    public function store(NewPostRequest $request)
    {

        if($request->price > Auth::user()->coin) {
            return redirect()->route('user.post-create')->with(['fail' => Lang::get('messages.fail')]);
        }else {
            $this->postService->store($request);

            return redirect()->route('user.profile')->with(['success' => Lang::get('messages.upPost')]);
        }
    }

    public function detail($id)
    {
        $rule = Config::get('helper.user_type_helper');
        $post              = $this->postService->getPost($id);
        $postsSameCategory = $this->postService->getPostsSameCategory($id);
        $users             = $this->postService->getPost($id)->user;
        $gender            = Config::get('helper');

        return view('client.job_detail',
               compact('post', 'gender', 'users', 'postsSameCategory', 'rule'));
    }
    public function applyRequest($id)
    {
        $status            = Config::get('helper');
        $post              = $this->postService->getPost($id);
        $countAmount       = $this->userApplyService->countAmount($id);
        $gender            = Config::get('helper');

        return view('client.userFinder.apply_request',
               compact('post', 'gender', 'status', 'countAmount', 'statusOwner'));
    }

    public function confirmSuccess($id)
    {
        $check             = Config::get('helper');
        $post              = $this->postService->getPost($id);
        $countAmount       = $this->userApplyService->countAmount($id);
        $userApplyById     = $this->userApplyService->getUserApplyById($id);
        $gender            = Config::get('helper');

        return view('client.userHelper.confirm-success',
            compact('post', 'gender', 'check', 'countAmount', 'userApplyById'));
    }

}
