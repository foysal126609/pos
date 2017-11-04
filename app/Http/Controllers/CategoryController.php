<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryInfo()
    {
//        $allCategoriesInfo= Category::all();
        return view('admin.category.category-info', [
            'allCategoriesInfo' => $allCategoriesInfo = Category::all()
        ]);
    }

    public function saveCategoryInfo(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category-info')->with('message', 'category info save successfully');
    }

    public function editCategoryInfo($id)
    {
        $categoryInfoById = Category::find($id);
        return view('admin.category.edit-category-info', [
            'allCategoriesInfo' => $allCategoriesInfo = Category::all(),
            'categoryInfoById' => $categoryInfoById
        ]);
    }

    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category-info')->with('message', 'Category info update successfully');
    }
    public function unPublishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/category-info');

    }
    public function publishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/category-info');

    }
}
