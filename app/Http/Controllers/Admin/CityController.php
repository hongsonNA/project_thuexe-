<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CityRequest;
use App\Model\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function city_list(){

        $city = City::all();

        return view('admin.city.city_list', compact('city'));
    }

    public function city_add(){
        return view('admin.city.add_city');
    }

    public function city_create(CityRequest $request)
    {
        $city = new City();
        $city->name = $request->get('name');

        $city->save();

        return redirect()->route('city_list', compact('city'));
    }

    public function city_edit($id)
    {
        $city = City::find($id);
        if (empty($city)) {
            return view('admin.city.city_list');
        }

        return view('admin.city.edit_city', compact('city'));
    }

    public function city_update(CityRequest $request, $id)
    {
        $city = City::find($id);
        if (empty($city)) {
            return view('admin.city.edit_city');
        } else {
            $city->name = $request->get('name');
//            $mess_update = "";
//            if ($city->save()) {
//                $mess_update = "Sửa danh mục thành công";
//            }
            $city->save();
        }

        return redirect()->route('city_list', compact('city'));
    }

    public function city_remove($id)
    {
        $city = City::destroy($id);

        return redirect()->route('city_list', compact('city'));
    }
}
