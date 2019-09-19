<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Config;

class RequestPostService
{
    public function getAllPostActive()
    {
        $post = Post::all()->where('status', Config::get('helper.post_type_active'));
        $post = $post->load('user');
        $post = $post->load('category');

        return $post;
    }

    public function getAllPostInActive()
    {
        $post = Post::all()->where('status', Config::get('helper.post_type_inActive'));
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
