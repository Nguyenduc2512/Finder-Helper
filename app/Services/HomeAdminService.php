<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class HomeAdminService
{
    public function index()
    {

        $user = DB::table('users')->count();

        return $user;
    }
}
