<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
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

    public function index()
    {
        $category = $this->categoryService->getAllCategories();

        return view('admin.category.list_cate', compact('category'));
    }

    public function store(Request $request)
    {
        $this->categoryService->store($request);

        return redirect()->route('categories.index')->with(['success' => Lang::get('messages.success')]);

    }

    public function update(Request $request)
    {
        $this->categoryService->update($request);

        return redirect()->route('categories.index')->with(['success' => Lang::get('messages.success')]);
    }

    public function destroy(Category $category)
    {
       $this->categoryService->destroy($category);

       return $this->index();
    }

}
