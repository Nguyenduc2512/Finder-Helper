<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showInfo(Request $request)
    {
        $data = $request->id;
        return response()->json($data);
    }
}
