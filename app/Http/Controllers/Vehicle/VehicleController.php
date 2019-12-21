<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Requests\ManagerRequest;
use App\Model\CarBooking;
use App\Model\City;
use App\Model\Comment;
use App\Model\Vehicle;
use App\Model\ModelVehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;

class VehicleController extends Controller
{
    public function dashboard()
    {
        $vehicle = Vehicle::all();
        $comment = Comment::all();
//        $carBooking = CarBooking
        $waitingBooking = CarBooking::where('status', '1')->get();
        return view('front-end.admin_user.manage_post.dashboard', compact('vehicle', 'comment', 'waitingBooking'));
    }

    public function manage()
    {
        $user_id = (Auth::user()->id);
        $manage = DB::table('vehicles')
            ->where('user_id', '=', $user_id)->orderByDesc('id')->get();

        return view('front-end.admin_user.manage_post.manage_list', compact('manage'));
    }

    public function add()
    {
        $citys = City::all();
        $model_car = ModelVehicle::all();

        return view('front-end.admin_user.manage_post.edit_add', compact('citys', 'model_car'));
    }

    public function states($id)
    {
        $states = DB::table('districts')
            ->where("city_id", $id)
            ->pluck("name");
        return response()->json($states);
    }

    public function stateU($id)
    {
        $states = DB::table('districts')
            ->where("city_id", $id)
            ->pluck("name");
        return response()->json($states);
    }

    public function edit(managerList $managerList)
    {

        return view('front-end.admin_user.manage_post.edit_add', compact('managerList'));
    }

    public function create(ManagerRequest $request)
    {

        $listmul = new managerList();
        $listmul->view = $request->get('view', '0');
        $listmul->fill($request->all());
        $listmul->user_id = (Auth::user()->id);
        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 310);
            $image_resize->save(public_path('image_upload/img_vehicle/' . $FileName));
            $listmul->image = $FileName;
        } else {
            $listmul->image = "default_car.jpg";
        }

        $mes = 'Thêm thành công ';
        if ($listmul->save()) {
            $mes = 'Thêm thành công ';
        }
        return redirect()->route('manage', compact('listmul'))->with('mes', $mes);

    }

    public function edit_vehicles($id)
    {
        $citys = City::all();
        $model_car = ModelVehicle::all();
        $maga_edit = Vehicle::find($id);
        if (empty($maga_edit)) {
            return view('front-end.admin_user.manage_post.manage_list');
        }

        return view('front-end.admin_user.manage_post.edit', compact('maga_edit', 'citys', 'model_car'));
    }

    public function update_vehicles(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 310);
            $image_resize->save(public_path('image_upload/img_vehicle/' . $FileName));
            $listmul->image = $FileName;
        }
        $listmul->fill($request->all());
        $mess = ' ';
        if ($listmul->save()) {
            $mess = 'Cập nhật thành công';
        }

        return redirect()->route('manage', compact('listmul'))->with('mess', $mess);

    }

    public function remote($id)
    {
        $managerList = Vehicle::destroy($id);
        return redirect()->route('manage', compact('managerList'));
    }

//==========car waiting==========
    public function waiting_car()
    {
        $waiting = DB::table('car_bookings')->where('status', '1')->get();

        return view('front-end.admin_user.manage_post.waiting', compact('waiting'));
    }

    public function AllDatatable()
    {
        return Datatables::of(CarBooking::all())
            ->editColumn('user_id', function ($waiting) {
                return $waiting['user']['name'];
            })
            ->editColumn('vehicle_id', function ($waiting) {
                return $waiting['Vehicle']['name'];
            })
            ->addColumn('status', function ($waiting) {
                return '
                <a onclick="return myForm();" href="javascript:;" data-id="' . $waiting->id . '"  class="changeStatus btn btn-success"
                                                   data-original-title="" title="">
                                                    <i class="fa fa-edit">Xác nhận </i>
                                                </a>
                                                <a href="javascript:;"  data-id="' . $waiting->id . '"  class="dangerCar btn btn-danger"
                                                   data-original-title="" title="">
                                                    <i class="fa fa-times">Hủy</i>
                                                </a>


                                                ';
            })->rawColumns(['status'])
            ->make(true);
    }

//==========car_booking==========
    public function status()
    {

    }

    public function carBooking()
    {
        $user_id = (Auth::user()->id);
        $booking = Comment::All()->where('vehicle_id', $user_id);
        return view('front-end.admin_user.manage_post.carBooking', compact('booking'));
    }

//    update status booking
    public function change(Request $request, $id)
    {
        $booking = new CarBooking();
        $booking = CarBooking::find($id);
        $booking->status = $request->get('status', '2');
        $booking->fill($request->all());
        $booking->save();
        return $booking;
    }

// =====DANGER======
    public function danger(Request $request, $id)
    {
        $booking = new CarBooking();
        $booking = CarBooking::find($id);
        $booking->status = $request->get('status', '5');
        $booking->fill($request->all());
        $booking->save();
        return $booking;
    }

//===========profile_member============
    public function profile_member()
    {
        return view('front-end.admin_user.profile_member');
    }

    public function removeCM($id)
    {
        $remote = Comment::destroy($id);
        return back();
    }

    public function chartCar()
    {
        $countCar = DB::table('vehicles')
            ->select(DB::raw('count(*) as vehicles'))->get();
//       dd($countCar);
        return response()->json($countCar);
    }
}
