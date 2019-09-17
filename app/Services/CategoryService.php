<?php 

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryService{

    public function index()
    {
        $category = Category::all();

        return $category;
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $category = Category::create($data);

        return $category;
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