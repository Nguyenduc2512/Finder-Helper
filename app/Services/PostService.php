<?php

namespace App\Services;
use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Routing\UrlGenerator;

class PostService
{
    public function getPosts()
    {
        $status = Config::get('helper.post_type_active');
        $posts = Post::where('status', $status)->get();

        return $posts;
    }

    public function getNewPosts()
    {
        $status = Config::get('helper.post_type_active');
        $newposts = Post::where('status', $status)->orderBy('start_time', 'desc')->get();

        return $newposts;
    }

    public function getPostsPriceHigh()
    {
        $status = Config::get('helper.post_type_active');
        $postsPriceHigh = Post::where('status', $status)->orderBy('price', 'desc')->get();

        return $postsPriceHigh;
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

    public function getPost($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function getPostsSameCategory($id)
    {
        $status = Config::get('helper.post_type_active');
        $category_id = Post::find($id)->category_id;
        $postsSameCategory = Post::where('category_id', $category_id)->where('status', $status)->take('5')->get();

        return$postsSameCategory;
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
        $bv = Post::all()->count();

        return $bv;
    }

    public function countPostRequest()
    {
        $posts = Post::all()->where('status', '<>', 1)->count('status');

        return $posts;

    }

}
