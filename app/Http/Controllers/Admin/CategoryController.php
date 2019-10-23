<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
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
                return '<a href="' . route('category_edit', $cate->id) . '">
                            <button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="Sửa danh mục" title="">
                                <i class="material-icons">edit</i>
                            <div class="ripple-container"></div></button>
                        </a>
                        
                        <a href="' . route('category_remove', $cate->id) . '" OnClick="return confirm(\'Bạn có chắc chắn muốn xóa danh mục không?\')">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="Xóa danh mục" title="">
                                <i class="material-icons">close</i>
                            <div class="ripple-container"></div></button>
                        </a>
                        
                        
                        ';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function category_add()
    {
        return view('admin.category.add_category');
    }

    public function category_create(CategoryRequest $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $mess_add = "";
        if ($categories->save()) {
            $mess_add = "Thêm mới danh mục thành công.";
        }

        return redirect()->route('category_list', compact('categories'))->with('mess_add', $mess_add);
    }

    public function category_edit($id)
    {
        $cate = Category::find($id);
        if (empty($cate)) {
            return view('admin.category.category_list');
        }

        return view('admin.category.edit_category', compact('cate'));
    }

    public function category_update(CategoryRequest $request, $id)
    {
        $cate = Category::find($id);
        if (empty($cate)) {
            return view('admin.category.edit_category');
        } else {
            $cate->name = $request->get('name');
            $mess_update = "";
            if ($cate->save()) {
                $mess_update = "Sửa danh mục thành công";
            }
        }

        return redirect()->route('category_list', compact('cate'))->with('mess_update', $mess_update);
    }

    public function category_remove($id)
    {
        $cate = Category::destroy($id);

        return redirect()->route('category_list', compact('cate'));
    }
}
