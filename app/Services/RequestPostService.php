<?php

namespace App\Services;
use App\Models\Category;
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

    public function getCatgories()
    {
        $category = Category::all();

        return $category;
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'amount'      => $request->amount,
            'price'       =>$request->price,
            'address'     => $request->address,
            'detail'      => $request->detail,
            'status'      => $request->status,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
        ];

        $post->fill($data);
        $post->save();
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }

}
