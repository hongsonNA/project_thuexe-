<?php

namespace App\Repositories;

use App\Model\ModelVehicle;
use Yajra\DataTables\Facades\DataTables;

class ModelCarRepository implements VehicelRepositoryInterface {

    public function AllDatatable()
    {
        return Datatables::of(ModelVehicle::all())
            ->addColumn('action', function ($model_car) {
                return '<a href="'.route('model_edit', $model_car->id).'" class="btn btn-link btn-info btn-just-icon edit">
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
                                <h5 class="modal-title text-center" id="exampleModalLabel">Xóa hãng xe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                    Bạn có chắc chắn muốn xóa hãng xe này không?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <a href="' . route('model_remove', $model_car->id) . '" class="btn btn-danger">Xóa</a>
                              </div>
                            </div>
                          </div>
                        </div>';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function store($request)
    {
        $model_car = new ModelVehicle();
        $model_car->name = $request->get('name');
        $mess_add = "";
        if ($model_car->save()) {
            $mess_add = "Thêm mới hãng xe thành công.";
        }

        return redirect()->route('model_list', compact('model_car'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $model_car = ModelVehicle::find($id);
        if (empty($model_car)) {
            return view('admin.model.model_list');
        }

        return view('admin.model.edit_model', compact('model_car'));
    }

    public function update($request, $id)
    {
        $model_car = ModelVehicle::find($id);
        if (empty($model_car)) {
            return view('admin.model.edit_model');
        } else {
            $model_car->name = $request->get('name');
            $mess_update = "";
            if ($model_car->save()) {
                $mess_update = "Sửa hãng xe thành công";
            }
        }

        return redirect()->route('model_list', compact('model_car'))->with('mess_update', $mess_update);
    }

    public function destroy($id)
    {
        $model_car = ModelVehicle::find($id);
        if ($model_car) {
            $remove_model = ModelVehicle::destroy($id);
        } else {
            return view('admin.model.model_list');
        }

        return redirect()->route('model_list', compact('model_car'));
    }
}
