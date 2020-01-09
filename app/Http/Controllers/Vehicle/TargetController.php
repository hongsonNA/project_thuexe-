<?php

namespace App\Http\Controllers\Vehicle;

use App\Model\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Target;
use App\Model\User;
use App\Model\Vehicle;
use App\User as AppUser;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TargetController extends Controller
{
    public function index()
    {

        $vehicle = Vehicle::with([
            'user' => function ($query) {
                $query->select(['id', 'name']);
            }
        ])
            ->get();

        return view('front-end.admin_user.target.index', compact('vehicle'));
    }


    public function index_success()
    {
        $vehicle = Target::with([
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            },
            'vehicle' => function ($query) {
                $query->select(['id', 'user_id', 'name', 'status']);
            }
        ])
            ->get()->toArray();

        return view('front-end.admin_user.target.index_succses', compact('vehicle'));

    }
    public function index_error()
    {
        $vehicle = Target::with([
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            },
            'vehicle' => function ($query) {
                $query->select(['id', 'user_id', 'name', 'status']);
            }
        ])
            ->get()->toArray();

        return view('front-end.admin_user.target.index_error', compact('vehicle'));

    }


    public function edit($id)
    {

        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $image = Image::where('vehicle_id', $vehicle['id'])->get()->toArray();
            $image_array['image_vehicle'] = $image;
        } else {
            abort(404);
        }
        return view('front-end.admin_user.target.edit', compact('vehicle', 'image_array'));
    }

    public function update(Request $request, $id)
    {

        $vehicle = Vehicle::find($id);
        if (empty($vehicle)) {
            return view('front-end.admin_user.target.index');
        } else {
            $vehicle->status = $request->get('status');
            if ($vehicle->save()) {
                $target = new Target();
                $target->vehicle_id = $vehicle->id;
                $target->user_id = (Auth::user()->id);
                $target->description = $request->get('description');
                $target->start_date = date('Y-m-d');
                $target->end_date = date('Y-m-d', strtotime(date("Y-m-d") . " + 1 year"));
                $mess = "";
                if ($target->save()) {
                    $mess = "Kiểm duyệt thành công";
                }
            }
            return redirect()->route('index_target')->with('mess', $mess);
        }
    }
}
