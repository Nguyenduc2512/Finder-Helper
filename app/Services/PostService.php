<?php

namespace App\Services;
use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function getPosts()
    {
        $posts = Post::all();

        return $posts;
    }

    public function getNewPosts()
    {
        $newposts = Post::orderBy('start_time', 'desc')->get();

        return $newposts;
    }

    public function getCategories()
    {
        $categories = Category::all();

        return $categories;

    }

    public function getLocations()
    {
        $locations = Location::all();

        return $locations;

    }

    public function store(NewPostRequest $request)
    {
        $post = new Post();
        $gender = Config::get('helper');
        $data = [
            'title'       => $request->title,
            'amount'      => $request->amount,
            'price'       => $request->price,
            'address'     => $request->address,
            'detail'      => $request->detail,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'gender'      => $request->gender,
            'location_id' => $request->location_id,
            'category_id' => $request->category_id,
            'user_id'     => Auth::user()->id,
        ];
        $post->fill($data);
        $post->save();

        return redirect()->route('user.profile', compact('gender'))->with('errmsg', 'Bài viết của bạn đang được chờ duyệt');
    }
    public function countPost()
    {
        $bv = DB::table('posts')->count();

        return $bv;
    }
    public function countPostRequest()
    {
        $posts = DB::table('posts')->where('status', '<>', 1)->count('status');

        return $posts;
    }

}
