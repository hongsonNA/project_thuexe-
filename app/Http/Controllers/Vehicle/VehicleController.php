<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerRequest;
use App\Model\CarBooking;
use App\Model\City;
use App\Model\Comment;
//use App\Model\Image as VehicleImage;
use App\Model\Image;
use App\Model\ModelVehicle;
use App\Model\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Image;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Promise\all;

//use Intervention\Image\ImageManagerStatic as Image;


class VehicleController extends Controller
{
    public function dashboard()
    {
        $user_id = Auth::user()->id;
        $vehicle = Vehicle::all()->where('user_id', $user_id);
        $comment = Comment::all();
//        $carBooking = CarBooking
        $waitingBooking = CarBooking::where('status', '1')->get();
        return view('front-end.admin_user.manage_post.dashboard', compact('vehicle', 'comment', 'waitingBooking'));
    }

    public function manage()
    {
        $manage = Vehicle::all();
        $image_array = [];
        foreach ($manage as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }
        return view('front-end.admin_user.manage_post.manage_list', compact('image_array'));
    }
    public function waiting_target()
    {
        $manage = Vehicle::all();
        $image_array = [];
        foreach ($manage as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }
        return view('front-end.admin_user.manage_post.waiting_target', compact('image_array'));
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
        $listmul = new Vehicle();
        $listmul->view = $request->get('view', '0');
        $listmul->fill($request->all());
        $listmul->user_id = (Auth::user()->id);
        $mes = '';

        $images_File = $request->file('image_vehicle');
        if ($listmul->save()) {
            foreach ($images_File as $image_Files) {
                $new_image = new Image();
                $FileName = $image_Files->getClientOriginalName();
                $image_Files->move('image_upload/img_vehicle/', $FileName);
                $new_image->image_vehicle = $FileName;
                $new_image->vehicle_id = $listmul->id;
                $new_image->save();
            }
        }
        $mess ='thanh cong ';

        return redirect()->route('manage', compact('listmul'))->with('mes', $mes);
    }

    public function edit_vehicles($id)
    {
        $citys = City::all();
        $model_car = ModelVehicle::all();
        $maga_edit = Vehicle::find($id);
        $image = Image::where('vehicle_id', $maga_edit['id'])->get()->toArray();
//        dd($image);
        $image_array['image_vehicle'] = $image;


        if (empty($maga_edit)) {
            return view('front-end.admin_user.manage_post.manage_list');
        }

        return view('front-end.admin_user.manage_post.edit', compact('maga_edit', 'citys', 'model_car','image_array'));
    }

    public function update_vehicles(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        if (empty($listmul)){
            return view('front-end.admin_user.manage_post.manage_list');
        }else{
            $mes = '';
            $images_File = $request->file('image_vehicle');
            $listmul->fill($request->all());
            if ($listmul->save()) {
                if ($images_File){
                    foreach ($images_File as $image_Files) {
                        $new_image = new Image();
                        $FileName = $image_Files->getClientOriginalName();
                        $image_Files->move('image_upload/img_vehicle/', $FileName);
                        $new_image->image_vehicle = $FileName;
                        $new_image->vehicle_id = $listmul->id;
                        $new_image->save();
                    }
                }
                $mes = 'thanh cong ';
            }
        }
        return redirect()->route('manage', compact('listmul'))->with('mess', $mes);
    }

    public function remote($id)
    {
        $remote_id = Vehicle::find($id);
        if ($remote_id) {
            $remove_vehicle = Vehicle::destroy($id);
            if ($remove_vehicle) {
                $delete_img = Image::where('vehicle_id', $id)->delete();
            }
        } else {
            abort(404);
        }
        $managerList = Vehicle::destroy($id);
        return redirect()->route('manage', compact('managerList'));
    }

    public function remove_image($id)
    {
        $image_remove = Image::destroy($id);
        return back();
    }
//==========car waiting==========
    public function waiting_car()
    {
        $waiting = DB::table('car_bookings')->where('status', '1')->get();

//        $waiting = CarBooking::with([
//            'vehicle' => function ($query) {
//                $query->select(['id', 'name']);
//            }
//        ])->get()->toArray();
//
//        dd($waiting);
        return view('front-end.admin_user.manage_post.waiting', compact('waiting'));
    }

    public function AllDatatable()
    {

        return Datatables::of(CarBooking::all())
//            ->editColumn('user_id', function ($waiting) {
//                return $waiting['user']['name'];
//            })
            ->editColumn('vehicle_id', function ($waiting) {
                return $waiting['vehicle']['name'];
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
