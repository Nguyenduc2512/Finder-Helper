<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\HomeAdminService;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeAdminService $homeService)
    {
        $this->homeService = $homeService;
    }
    public function index()
    {
        return $this->homeService->index();

    }

}
