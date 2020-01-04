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
//        $target = DB::table('targets')
//            ->join('users', 'users.id', '=', 'targets.user_id')
//            ->join('vehicles', 'vehicles.id', '=', 'targets.vehicle_id')
////            ->select('users.name', 'vehicles.name')
//            ->get();

//        $users = DB::table('users')
//            ->join('targets', 'users.id', '=', 'targets.user_id')->get()->toArray();

        dd($vehicle);

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
