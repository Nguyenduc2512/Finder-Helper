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

class NewPostService
{
    public function getCategory()
    {
        $category = Category::all();

        return $category;

    }

    public function getLocation()
    {
        $location = Location::all();

        return $location;

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

        return redirect()->route('profile', compact('gender'))->with('errmsg', 'Bài viết của bạn đang đưuọc chờ duyệt');
    }

}
