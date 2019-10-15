<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category_list()
    {
        return view('admin.category.category_list');
    }

    public function category_add (){
        return view('admin.category.add_category');
    }
}
