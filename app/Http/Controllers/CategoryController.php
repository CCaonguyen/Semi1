<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    public function getAllCategory()
    {
         $category = Category::All();
        
        return view('admin.admin-category',  compact("category"));
    }



    public function createCategory(Request $request)
    {
        $category = new Category;
        $category->categoryID = $request->categoryID;
        $category->categoryName =  $request->categoryName;
        $category->description = $request->description;
       
        
        $category->save();
       
         return redirect()->route('admin-category');
    }

    public function deleteCategory($categoryID)
    {
        $category = Category::find($categoryID);
        $category->delete();
        return back();
    }
    public function updateCategory(Request $request, $categoryID)
    {
        $category = Category::find($categoryID);
        $category->categoryID = $request->categoryID;
        $category->categoryName = $request->categoryName;
        $category->description = $request->description;
       
        $category->save();
        return back();

    
    }
    public function getUpdateCategory($categoryID)
    {
        $data['category'] = Category::find($categoryID);
        return view('admin.admin-updateCategory',$data);
    }

}
