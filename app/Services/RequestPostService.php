<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Config;

class RequestPostService
{
    public function getAllPostJob()
    {
        $post = Post::orderBy('status', 'asc')->get();
        $post = $post->load('user');
        $post = $post->load('category');

        return $post;
    }

    public function update(Request $request)
    {
        $data = $request->except('_token', 'id');
        $post = Post::find($request->id);

        return $post->update($data);
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }

}
