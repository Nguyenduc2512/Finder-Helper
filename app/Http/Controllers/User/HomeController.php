<?php

namespace App\Http\Controllers\User;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\UserService;
use App\Services\ApplyJobService;
use Illuminate\Support\Facades\Config;
use function Symfony\Component\VarDumper\Dumper\esc;

class HomeController extends Controller
{
    protected $postService;
    protected $userService;
    protected $userApplyService;

    public function __construct( PostService $postService,
                                 UserService $userService,
                                 ApplyJobService $userApplyService )
    {
        $this->postService = $postService;
        $this->userService = $userService;
        $this-> userApplyService = $userApplyService;
    }

    public function index()
    {
        $posts    = $this->postService->getPosts();
        $newPosts  = $this->postService->getNewPosts();
        $categories = $this->postService->getCategories();
        $postsPriceHigh = $this->postService->getPostsPriceHigh();
        $usersApply = $this->userApplyService->userApply();
        foreach ($newPosts as $newPost) {
            $newPost->apply = false;
            if ($usersApply != null) {
                foreach ($usersApply as $userApply) {
                    if ($newPost->id == $userApply->post_id) {
                        $newPost->apply = true;
                    }
                }
            }
        }
        foreach ($posts as $post) {
            $post->apply = false;
            if ($usersApply != null) {
                foreach ($usersApply as $userApply) {
                    if ($post->id == $userApply->post_id) {
                        $post->apply = true;
                    }
                }
            }
        }
        foreach ($postsPriceHigh as $postPriceHigh) {
            $postPriceHigh->apply = false;
            if ($usersApply != null) {
                foreach ($usersApply as $userApply) {
                    if ($postPriceHigh->id == $userApply->post_id) {
                        $postPriceHigh->apply = true;
                    }
                }
            }
        }

        return view('client.index', compact('posts', 'newPosts', 'categories', 'postsPriceHigh'));
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
        $categories = $this->postService->getCategories();
        $locations  = $this->postService->getLocations();
        $usersApply = $this->userApplyService->userApply();
        foreach ($newPosts as $newPost) {
            $newPost->apply = false;
            if ($usersApply != null) {
                foreach ($usersApply as $userApply) {
                    if ($newPost->id == $userApply->post_id) {
                        $newPost->apply = true;
                    }
                }
            }
        }

        return view('client.all_job', compact( 'newPosts', 'categories', 'locations'));
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
