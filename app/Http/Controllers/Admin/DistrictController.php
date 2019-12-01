<?php

namespace App\Http\Controllers\Admin;

use App\Model\City;
use App\Model\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    public $city;

    public function __construct()
    {
        $this->city = City::all();
    }

    public function create()
    {
        $city = $this->city;

        return view('admin.district.add_district', compact('city'));
    }

    public function store(Request $request)
    {
        $city = $this->city;
        $district = new District();
        $district->name = $request->get('name');
        $district->city_id = $request->get('city_id');
        $mess_add = "";
        if ($district->save()) {
            $mess_add = "Thêm mới quận huyện thành công.";
        }

        return redirect()->route('city_list', compact('district', 'city'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $city = $this->city;
        $district = District::find($id);
        if (empty($city)) {
            return view('admin.city.city_list');
        }

        return view('admin.district.edit_district', compact('city','district'));
    }

    public function update(Request $request, $id)
    {
        $district = District::find($id);
        if (empty($district)) {
            return view('admin.district.edit_district');
        } else {
            $district->name = $request->get('name');
            $district->city_id = $request->get('city_id');
            $mess_update = "";
            if ($district->save()) {
                $mess_update = "Sửa quận huyện thành công";
            }
        }

        return redirect()->route('city_list', compact('district'))->with('mess_update', $mess_update);
    }

    public function destroy($id)
    {
        $district = District::find($id);
        if ($district) {
            $remove_district = District::destroy($id);
        } else {
            return view('admin.city.city_list');
        }

        return redirect()->route('city_list', compact('district'));
    }
}
