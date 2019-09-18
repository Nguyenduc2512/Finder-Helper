<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
    	$users = DB::table('users')->count();
    	$admin = DB::table('admins')->count();
    	$categories = DB::table('categories')->count();
    	$bv = DB::table('posts')->count();
    	$posts = DB::table('posts')->where('status', '<>', 1)->count('status');
         return view('admin.admin', ['users' => $users,'admin' => $admin, 'categories' => $categories, 'posts' => $posts, 'bv' => $bv]);
    }

}
