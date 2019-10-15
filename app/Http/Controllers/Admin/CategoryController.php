<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category_list()
    {
        $categories = Category::paginate(5);

        return view('admin.category.category_list', compact('categories'));
    }

    public function category_add()
    {
        return view('admin.category.add_category');
    }

    public function category_create(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $mess = "";
        if ($categories->save()){
            $mess = "Save successfully";
        }
        return redirect()->route('category_list', compact('categories'))->with('mess', $mess);

    }
}
