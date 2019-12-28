<?php

namespace App\Http\Controllers\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Target;
use App\Model\Vehicle;

class TargetController extends Controller
{
    public function index() {

        // $target = Target::with([
        //     'vehicle' => function ($query) {
        //         $query->select(['id', 'name', 'status']);
        //     },
        //     'user' => function ($query) {
        //         $query->select(['id', 'name']);
        //     }
        //     ])
        //     ->get()->toArray();

        $vehicle = Vehicle::with([
            'user' => function ($query) {
                $query->select(['id', 'name']);
            }
            ])
            ->get()->toArray();
        // dd($vehicle);
        return view('front-end.admin_user.target.index', compact('vehicle'));
    }


    public function edit($id) {
        return view('front-end.admin_user.target.edit');
    }
}
