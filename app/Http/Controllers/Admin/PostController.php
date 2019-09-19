<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\RequestPostService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class PostController extends Controller
{
    protected $requestPost;

    public function __construct(RequestPostService $requestPost)
    {
        $this->requestPost = $requestPost;
    }

    public function index()
    {
        $post = $this->requestPost->getAllPostActive();

        return view('admin.post.list_post', compact('post'));
    }

    public function getPostsRequesting()
    {
        $post = $this->requestPost->getAllPostInActive();

        return view('admin.post.request_post', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit_post', ['post' => $post ]);
    }

    public function update(Request $request)
    {
        $this->requestPost->update($request);

        return redirect()->route('posts.index')->with(['success' => Lang::get('messages.requestPost') ]);
    }

    public function destroy(Post $post)
    {
        $this->requestPost->destroy($post);

        return $this->getPostsRequesting();
    }

}
