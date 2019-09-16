<?php 

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryService{

    public function show()
    {
        $category = Category::all();

        return $category;
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $cate = Category::create($data);

        return $cate;
    }

    public function update(Request $request)
    {
        $data = $request->except('_token', 'id');
        $cate = Category::find($request->id);
        $cate->update($data);

        return $cate;
    }

    public function destroy(Category $cate)
    {
       return $cate->delete(); 
    }
    
}