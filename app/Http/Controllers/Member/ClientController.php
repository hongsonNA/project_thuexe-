<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Image;
use App\Model\ModelVehicle;
use App\Model\User;
use App\Model\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller {
	public function edit($id) {
		$user = User::find($id);
		if (empty($user)) {
			return view('front-end.profile');
		}
		return view('auth.register_member', compact('user'));
	}
	public function register_member(Request $request, $id) {
		$member       = User::find($id);
		$member->role = $request->get('role', '2');
		$member->fill($request->all());
		$mess_update = "";
		if ($member->save()) {
			$mess_update = "thành công";
		}

		return back()->with('mess_update', $mess_update);
	}
	//====the end create member =======

	//====== category blade =========
	public function cate() {
		$city      = city::All();
		$model_car = Vehicle::all();
		$model     = ModelVehicle::all();
		return view('front-end.category', compact('model', 'city', 'model_car'));
	}
	public function search_cate(Request $request) {
		$seat        = $request->get('seat');
		$model_id    = $request->get('model_id');
		$city_id     = $request->get('city_id');
		$district_id = $request->get('district_id');
		$searchQuery = Vehicle::where('model_id', 'like', "%$model_id%")
			->where('district_id', 'like', "%$district_id%")
			->where('seat', 'like', "%$seat%")
			->where('city_id', 'like', "%$city_id%")	->get();
		dd($searchQuery);
		$image_array = [];
		foreach ($searchQuery as $key => $value) {
			$image                              = Image::where('vehicle_id', $value['id'])->first();
			$image_array[$key]                  = $value;
			$image_array[$key]['image_vehicle'] = $image;
		}

		return view('front-end.search', compact('searchQuery', 'image_array'));
		//        dd($searchQuery);
	}
	public function fillterCar(Request $request, $id) {
//        $querySort = new Vehicle();
//        $sorVehicle = '';

            if ($request->ajax() && isset($id) == "ALL"){

                   if (isset($id) == "DESC"){
                       $sortprice = DB::table('vehicles')
                           ->where('is_trash',0);
//                       $sortprice->orderBy('price', 'desc')->get();
                       dd($sortprice);
                   }
            }
//            return $sortprice;
	}

	public function fetch_data_car(Request $request) {
		if ($request->ajax() && isset($request->model)) {
			$getall_car = Vehicle::all()->where('status', 2);
			if (isset($request->model)) {
				$model_filter = implode(',', $request->model);
				$getall_car->where('model_id', $model_filter);
				//               dd($getall_car->where('model_id',$model_filter));
			}
			$res = '';
			if ($getall_car) {
				foreach ($getall_car as $car_id) {
					$res .= '<div class="listing">
	                                   <div class="image">
	                                       <a href="'.route('detail', $car_id['id']).'">
	                                           <img src="https://s3.amazonaws.com/files.activate.social/user-image-32740129-1552215451-5c84ed9b68ace" alt="listing" class="img-responsive">
	                                       </a>
	                                   </div>
	                                   <div class="content_car">
	                                       <div class="title"><a href="javscript:;">'.$car_id['name'].' <span>[ Grand ]</span></a></div>
	                                       <a href="'.route('detail', $car_id['id']).'">'.$car_id['name'].'</a>
	                                       <div class="price">'.number_format($car_id['price']).'<span> VND</span></div>
	                                   </div>
	                               </div>';
				}
			} else {
				$res .= 'khong co du lieu';
			}
		}
		return $res;
	}
	//====== end category ===========

}
