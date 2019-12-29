<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Target;
use App\Model\User;
use App\Model\Vehicle;
use App\User as AppUser;
use DateTime;
use Illuminate\Support\Facades\Auth;

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


        // dd($users->id);
        // $user_target = [];

        $vehicle = Vehicle::with([
            'user' => function ($query) {
                $query->select(['id', 'name']);
            },
            'target' => function ($query) {

                $query->select(['id', 'vehicle_id', 'user_id', 'description']);
            }
        ])
            ->get()->toArray();

        // // $target = User::where('id', $vehicle['target']['user_id'])->get();
        // // $user_target['name'] = $target;
        // foreach ($vehicle as $key => $value) {
        //     $target = User::where('id', $value['target']['user_id'])->get();
        //     $user_target['users'] = $target;
        //     // $user_target['$key'] = $target;
        // }

        // dd($vehicle);

        // $target = User::where('id', $vehicle[0]['target']['user_id'])->get();
        // dd()


        return view('front-end.admin_user.target.index_succses', compact('vehicle'));
    }


    public function edit($id)
    {

        $vehicle = Vehicle::find($id);

        return view('front-end.admin_user.target.edit', compact('vehicle'));
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
