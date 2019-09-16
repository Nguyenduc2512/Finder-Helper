<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function addCate(Request $request)
    {
        $this->categoryService->addCate($request);

        return redirect()->route('admin.list-cate')->with('errmsg', 'success');
    }

    public function saveCate(Request $request)
    {
        $this->categoryService->saveCate($request);

        return redirect()->route('admin.list-cate')->with('errmsg', 'success');
    }

    public function deleteCate(Category $cate)
    {
       $this->categoryService->deleteCate($cate);

       return redirect()->route('admin.list-cate'); 
    }
    
}
