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
        $district->save();

        return redirect()->route('city_list', compact('district', 'city'));
    }

    public function edit($id)
    {
//        $district = District::find($id);
//        if (empty($district)) {
//            return view('admin.city.city_list');
//        }

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
    }
}
