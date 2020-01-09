<?php

namespace App\Repositories;

use App\Model\City;

class CityRepository implements VehicelRepositoryInterface {

    public function AllDatatable()
    {
    }

    public function store($request)
    {
        $city = new City();
        $city->name = $request->get('name');
        $mess_add = "";
        if ($city->save()) {
            $mess_add = "Thêm mới thành phố thành công.";
        }

        return redirect()->route('city_list', compact('city'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $city = City::find($id);
        if (empty($city)) {
            return view('admin.city.city_list');
        }

        return view('admin.city.edit_city', compact('city'));

    }

    public function update($request, $id)
    {
        $city = City::find($id);
        if (empty($city)) {
            return view('admin.city.edit_city');
        } else {
            $city->name = $request->get('name');
            $mess_update = "";
            if ($city->save()) {
                $mess_update = "Sửa thành phố thành công";
            }
        }

        return redirect()->route('city_list', compact('city'))->with('mess_update', $mess_update);
    }

    public function destroy($id)
    {
        $city = City::find($id);
        if ($city) {
            $remove_city = City::destroy($id);
        } else {
            return view('admin.city.city_list');
        }

        return redirect()->route('city_list', compact('city'));
    }

}
