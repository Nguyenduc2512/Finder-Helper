<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    
    public function index()
    {
        return view('admin/layouts/main');
    }
    
    public function listCate()
    {
        $category = $this->categoryService->listCate();

        return view('admin.category.list_cate', compact('category'));
    }

}
