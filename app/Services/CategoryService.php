<?php 

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryService{

    public function listCate()
    {
        $category = Category::all();

        return $category;
    }

    public function addCate(Request $request)
    {
        $data = $request->except('_token');
        $cate = Category::create($data);

        return $cate;
    }

    public function saveCate(Request $request)
    {
        $data = $request->except('_token', 'id');
        $cate = Category::find($request->id);
        $cate->update($data);

        return $cate;
    }

    public function deleteCate(Category $cate)
    {
       return $cate->delete(); 
    }
    
}