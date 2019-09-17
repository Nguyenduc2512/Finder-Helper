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
         return view('admin.admin');
        // return view('adbvmin.admin');
    }

}
