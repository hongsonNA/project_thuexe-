<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function category_list()
    {
        return view('admin.category.category_list');
    }

    public function allCategory()
    {

        return Datatables::of(Category::all())
            ->addColumn('action', function ($cate) {
                return '<a href="' . route('category_edit', $cate->id) . '"><button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="Sửa danh mục"> <i class="material-icons">edit</i></button></a>
                        <a href="' . route('category_remove', $cate->id) . '"><button type="button" data-id="' . $cate->id . '" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="Xóa danh mục"><i class="material-icons">close</i></button></a>';
            })->rawColumns(['action'])
            ->make(true);
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
        if ($categories->save()) {
            $mess = "Save successfully";
        }

        return redirect()->route('category_list', compact('categories'))->with('mess', $mess);
    }

    public function category_edit($id)
    {
        $cate = Category::find($id);

        return view('admin.category.edit_category', compact('cate'));
    }

    public function category_update(Request $request, $id)
    {
        $cate = Category::find($id);

        $cate->name = $request->get('name');
        $cate->save();

        return redirect()->route('category_list', compact('cate'));
    }

    public function category_remove($id)
    {
        $cate = Category::destroy($id);

        return redirect()->route('category_list', compact('cate'));
    }
}
