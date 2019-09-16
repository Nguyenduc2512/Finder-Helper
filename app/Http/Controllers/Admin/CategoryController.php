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

    public function show()
    {
        $category = $this->categoryService->show();

        return view('admin.category.list_cate', compact('category'));
    }

    public function store(Request $request)
    {
        $this->categoryService->store($request);

        return redirect()->route('admin.list-cate')->with('success', 'success');
    }

    public function update(Request $request)
    {
        $this->categoryService->update($request);

        return redirect()->route('admin.list-cate')->with('success', 'success');
    }

    public function destroy(Category $cate)
    {
       $this->categoryService->destroy($cate);

       return redirect()->route('admin.list-cate'); 
    }
    
}
