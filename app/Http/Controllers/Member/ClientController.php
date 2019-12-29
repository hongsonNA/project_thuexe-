<?php

namespace App\Http\Controllers\Member;

use App\Model\City;
use App\Model\Image;
use App\Model\ModelVehicle;
use App\Model\User;
use App\Model\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return view('front-end.profile');
        }
        return view('auth.register_member', compact('user'));
    }
    public function register_member(Request $request, $id)
    {
            $member = User::find($id);
            $member->role = $request->get('role','2');
            $member->fill($request->all());
            $mess_update = "";
            if ($member->save()) {
                $mess_update = "thành công";
            }

        return back()->with('mess_update', $mess_update);
    }
    //====the end create member =======

    //====== category blade =========
    public function cate()
    {
        $city = city::All();
        $model_car = Vehicle::all();
        $model = ModelVehicle::all();
        return view('front-end.category', compact('model', 'city', 'model_car'));
    }
    public function search_cate(Request $request)
    {
        $seat = $request->get('seat');
        $model_id = $request->get('model_id');
        $city_id = $request->get('city_id');
        $district_id = $request->get('district_id');
        $searchQuery = Vehicle::where('model_id', 'like', "%$model_id%")
            ->where('district_id', 'like', "%$district_id%")
            ->where('seat', 'like', "%$seat%")
            ->where('city_id', 'like', "%$city_id%")->get();
        dd($searchQuery);
        $image_array = [];
        foreach ($searchQuery as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }

        return view('front-end.search', compact('searchQuery','image_array'));
//        dd($searchQuery);
    }
    public function fillterCar($id)
    {
        //Vehicle::all()->where('price','>','1');
         $carDesc  = DB::select('SELECT * FROM `vehicles` ORDER BY price DESC');
        $carAsc  = DB::select('SELECT * FROM `vehicles` ORDER BY price asc ');
        $list_cate = Vehicle::all();
     $result = '';
     if ($id == 1){
         foreach ($carDesc as $car_id ){
             $result .= '<div class="listing">
                                    <div class="image">
                                        <a href="'.route('detail', $car_id->id).'">
                                            <img src="https://s3.amazonaws.com/files.activate.social/user-image-32740129-1552215451-5c84ed9b68ace" alt="listing" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="content_car">
                                        <div class="title"><a href="javscript:;">Ferrari <span>[ Grand ]</span></a></div>
                                        <a href="'.route('detail', $car_id->id).'">'.$car_id->name.'</a>
                                        <div class="price">'. number_format($car_id->price). '<span> VND</span></div>
                                    </div>
                           </div>
         ';
         }
     }elseif ($id == 2){
         foreach ($carAsc as $car_id ){
             $result .= '<div class="listing">
                                    <div class="image">
                                        <a href="'.route('detail', $car_id->id).'">
                                            <img src="https://s3.amazonaws.com/files.activate.social/user-image-32740129-1552215451-5c84ed9b68ace" alt="listing" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="content_car">
                                        <div class="title"><a href="javscript:;">Ferrari <span>[ Grand ]</span></a></div>
                                        <a href="'.route('detail', $car_id->id).'">'.$car_id->name.'</a>
                                        <div class="price">'. number_format($car_id->price). '<span> VND</span></div>
                                    </div>
                           </div>
         ';
         }
     }
     return $result;
    }
    //====== end category ===========

}
