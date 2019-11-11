<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CityRequest;
use App\Model\City;
use App\Model\District;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function city_list()
    {

        $city = City::all();
        $districts = District::paginate(5);

        return view('admin.city.city_list', compact('city', 'districts'));
    }

    public function ajax(Request $request)
    {
        $districts = City::find($request->get('city_id'))->districts;
        echo view('admin.district.ajax', compact('districts'));
        exit;
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $district = District::where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($district) {
                foreach ($district as $key => $d) {
                    $output .= '<tr>' .
                        '<td>' . $d->id . '</td>' .
                        '<td class="text-center">' . $d->name . '</td>' .
                        '<td class="text-right">' .
                        "<a href=\"\">
                               <button type=\"button\" rel=\"tooltip\" class=\"btn btn-info btn-link\" data-original-title=\"\" title=\"Sửa tài khoản\">
                                                        <i class=\"material-icons\">edit</i>
                                                    </button>
                                                </a>

                                                <a href=\"\">
                                                    <button type=\"button\" rel=\"tooltip\" class=\"btn btn-danger btn-link\"
                                                            data-original-title=\"\" title=\"Xóa tài khoản\">
                                                        <i class=\"material-icons\">close</i>
                                                    </button>
                                                </a>" .
                        '</td>' .
                        '</tr>';
                }
                return Response($output);
            }

        }
    }

    public function city_add()
    {
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
