<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService{

    public function getAllCategories()
    {
        $categories = Category::all();

        return $categories;
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $category = Category::create($data);

        return $category;
    }

    public function count(){
        $categories = DB::table('categories')->count();
        return $categories;
    }

    public function update(Request $request)
    {
        $data = $request->except('_token', 'id');
        $category = Category::find($request->id);
        $category->update($data);

        return $category;
    }

    public function destroy(Category $category)
    {
       return $category->delete();
    }

}
