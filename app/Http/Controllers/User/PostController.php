<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\NewPostRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use App\Services\NewPostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $newpost;

    public function __construct(NewPostService $newpost)
    {
        $this->newpost = $newpost;
    }

    public function create()
    {
        $category = $this->newpost->getCategory();
        $location = $this->newpost->getLocation();

        return view('client.formClient.new_post', compact('category', 'location'));

    }

    public function store(NewPostRequest $request)
    {
        $this->newpost->store($request);

        return redirect()->route('profile');
    }
}
