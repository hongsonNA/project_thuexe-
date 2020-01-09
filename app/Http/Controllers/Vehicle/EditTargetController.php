<?php

namespace App\Http\Controllers\Vehicle;

use App\Model\Image;
use App\Model\Vehicle;
use App\Model\Target;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditTargetController extends Controller
{
    public function editTarget()
    {
        $vehicle = Vehicle::with([
            'targets' => function ($query) {
                $query->select(['id', 'vehicle_id', 'user_id', 'description']);
            }
        ])->get();
//        dd($vehicle);
        $image_array = [];
        foreach ($vehicle as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }
//        dd($image_array);
        return view('front-end.admin_user.manage_post.edit_target', compact('image_array','vehicle'));

    }
    public function updateTarget(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        $listmul->status = $request->get('status',1);
        if (empty($listmul)){
            return view('front-end.admin_user.manage_post.manage_list');
        }else{
            $mes = '';
            $images_File = $request->file('image_vehicle');
            $listmul->fill($request->all());
            if ($listmul->save()) {
                if ($images_File){
                    foreach ($images_File as $image_Files) {
                        $new_image = new Image();
                        $FileName = $image_Files->getClientOriginalName();
                        $image_Files->move('image_upload/img_vehicle/', $FileName);
                        $new_image->image_vehicle = $FileName;
                        $new_image->vehicle_id = $listmul->id;
                        $new_image->save();
                    }
                }
                $mes = 'thanh cong ';
            }
        }
        return redirect()->route('manage', compact('listmul'))->with('mess', $mes);
    }
}
