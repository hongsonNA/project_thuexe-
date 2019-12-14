<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\City;
use App\Model\Comment;
use App\Model\ModelCar;
use Illuminate\Http\Request;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\managerList;
use App\Model\CarBooking;
use App\Model\Comments;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;


class ManagerUsController extends Controller
{
    public function dashboard(){
        $vehicle = managerList::all();
        $comment = Comments::all();
//        $carBooking = CarBooking
        $waitingBooking = CarBooking::where('status','1')->get();
        return view('front-end.admin_user.manage_post.dashboard',compact('vehicle','comment','waitingBooking'));
    }
    public function manage()
    {
        $user_id = (Auth::user()->id);
        $manage = DB::table('vehicles')
            ->where('user_id', '=', $user_id)->get();

        return view('front-end.admin_user.manage_post.manage_list', compact('manage'));
    }

    public function add()
    {
        $citys = City::all();
        $model_car = ModelCar::all();
        $category = Category::all();

        return view('front-end.admin_user.manage_post.edit_add', compact('citys', 'model_car', 'category'));
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

        $mess = 'Thêm thành công ';
        if ($listmul->save()) {
            $mess = 'Thêm thành công ';
        }
        return redirect()->route('manage_list', compact('listmul'))->with('mess', $mess);

    }

    public function edit_vehicles($id)
    {
        $citys = City::all();
        $model_car = ModelCar::all();
        $category = Category::all();
        $maga_edit = managerList::find($id);
        if (empty($maga_edit)) {
            return view('front-end.admin_user.manage_post.manage_list');
        }

        return view('front-end.admin_user.manage_post.edit', compact('maga_edit', 'citys', 'model_car', 'category'));
    }

    public function update_vehicles(Request $request, $id)
    {
        $listmul = new managerList();
        $listmul = managerList::find($id);
        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 310);
            $image_resize->save(public_path('image_upload/img_vehicle/' . $FileName));
            $listmul->image = $FileName;
        }
        $listmul->fill($request->all());

        $listmul->save();
        return redirect()->route('manage_list', compact('listmul'));

    }

    public function remote($id)
    {
        $managerList = managerList::destroy($id);
        return redirect()->route('manage_list', compact('managerList'));
    }

//==========car waiting==========
    public function waiting_car()
    {
        $waiting = DB::table('car_bookings')->where('status', '1')->get();

        return view('front-end.admin_user.manage_post.waiting', compact('waiting'));
    }

    public function AllDatatable()
    {


//        $waiting = DB::table('car_bookings')->where('status','1')->get();
        return Datatables::of(CarBooking::all())
            ->editColumn('user_id', function ($waiting) {
                return $waiting['user']['name'];
            })
            ->editColumn('vehicle_id', function ($waiting) {
                return $waiting['vehicle']['name'];
            })
            ->addColumn('status', function ($waiting) {
                return '
                <a href="javascript:;" data-id="' . $waiting->id . '"  class="changeStatus btn btn-success"
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
        $booking = Comments::All()->where('vehicle_id', $user_id);
//        dd($booking);
        return view('front-end.admin_user.manage_post.carBooking', compact('booking'));
    }

//    update status booking
    public function change(Request $request, $id)
    {
//        dd($id);
//        $data = $request->except('_token', $id);
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
//    dd($id);

//        $data = $request->except('_token', $id);
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
//        $allz = CarBooking::all();
//        $res = array();
//        foreach ($allz as $id){
//            $res[] = array('start_time'=>$id['start_date'],'end_date'=>$id['end_date']);
//        }
//        dd($res);
        $remote = Comments::destroy($id);
        return back();
    }

}
