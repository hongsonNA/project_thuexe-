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
            'target' => function ($query) {

                $query->select(['id', 'vehicle_id', 'user_id', 'description']);
            }
        ])->get()->toArray();
        $image_array = [];
        foreach ($vehicle as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }
//        dd($image_array);
        return view('front-end.admin_user.manage_post.edit_target', compact('image_array','vehicle'));

    }
}
