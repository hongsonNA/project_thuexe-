<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CityRequest;
use App\Model\City;
use App\Model\District;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{

    protected $CityRepository;

    public function __construct(CityRepository $CityRepository)
    {
        $this->CityRepository = $CityRepository;
    }

    public function index()
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

            $district = DB::table('districts')
                ->join('citys', 'citys.id', '=', 'districts.city_id')
                ->select('citys.id', 'citys.name', 'districts.id', 'districts.name')
                ->where('citys.name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('districts.name', 'LIKE', '%' . $request->search . '%')
                ->get();

            if ($district) {
                foreach ($district as $key => $d) {
                    $output .= '<tr>' .
                        '<td>' . $d->id . '</td>' .
                        '<td class="text-center">' . $d->name . '</td>' .
                        '<td class="text-right">' .
                        "<a href=" . route('district_edit', $d->id) . " class=\"btn btn-link btn-info btn-just-icon edit\">
                             <i class=\"material-icons\">edit</i>
                             <div class=\"ripple-container\"></div>
                        </a>

                                                <a class=\"btn btn-link btn-danger btn-just-icon remove\"
                                                   data-toggle=\"modal\" data-target=\"#removeDistrict\">
                                                    <i class=\"material-icons\">close</i>
                                                    <div class=\"ripple-container\"></div>
                                                </a>

                        <div class=\"modal fade\" id=\"removeDistrict\" tabindex=\"-1\" role=\"dialog\"
                                                     aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title text-center\"
                                                                    id=\"exampleModalLabel\">Xóa danh mục</h5>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-center\"
                                                                 style=\"color: red; font-weight: bolder\">
                                                                Bạn có chắc chắn muốn xóa quận huyện này không?
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-secondary\"
                                                                        data-dismiss=\"modal\">Hủy
                                                                </button>
                                                                <a href=" . route('district_remove', $d->id) . "
                                                                   class=\"btn btn-danger\">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        " .
                        '</td>' .
                        '</tr>';
                }
                return Response($output);
            }

        }
    }

    public function create()
    {
        return view('admin.city.add_city');
    }

    public function store(CityRequest $request)
    {
        return $this->CityRepository->store($request);
    }

    public function edit($id)
    {
        return $this->CityRepository->edit($id);
    }

    public function update(CityRequest $request, $id)
    {
        return $this->CityRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->CityRepository->destroy($id);
    }
}
