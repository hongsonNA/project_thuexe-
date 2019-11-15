<?php

namespace App\Repositories;

use App\Model\Category;
use Yajra\DataTables\Facades\DataTables;

class CategoryRepository implements VehicelRepositoryInterface {

    public function AllDatatable()
    {
        return Datatables::of(Category::all())
            ->addColumn('action', function ($cate) {
                return '<a href="' . route('category_edit', $cate->id) . '" class="btn btn-link btn-info btn-just-icon edit">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                        </a>
                        
                        <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                        </a>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Xóa danh mục</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                    Bạn có chắc chắn muốn xóa danh mục này không?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <a href="' . route('category_remove', $cate->id) . '" class="btn btn-danger">Xóa</a>                      
                              </div>
                            </div>
                          </div>
                        </div>';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function store($request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $mess_add = "";
        if ($categories->save()) {
            $mess_add = "Thêm mới danh mục thành công.";
        }

        return redirect()->route('category_list', compact('categories'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $cate = Category::find($id);
        if (empty($cate)) {
            return view('admin.category.category_list');
        }

        return view('admin.category.edit_category', compact('cate'));
    }

    public function update($request, $id)
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

    public function destroy($id)
    {
        $cate = Category::find($id);
        if ($cate) {
            $remove_cate = Category::destroy($id);
        } else {
            return view('admin.category.category_list');
        }

        return redirect()->route('category_list', compact('cate'));
    }
}
