<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\City;
use App\Model\ModelCar;
use Illuminate\Http\Request;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\managerList;
use App\Model\CarBooking;
use Intervention\Image\ImageManagerStatic as Image;


class ManagerUsController extends Controller
{
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
        $listmul->view = $request->get('view','0');
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

        return view('front-end.admin_user.manage_post.edit', compact('maga_edit','citys', 'model_car', 'category'));
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
        $waiting = DB::table('car_bookings')->where('status','1')->get();
        return view('front-end.admin_user.manage_post.waiting', compact('waiting'));
    }

//==========car_booking==========
    public function carBooking()
    {
        $booking = DB::table('car_bookings')->where('status', '=', '2')->get();
        return view('front-end.admin_user.manage_post.carBooking', compact('booking'));
    }
//    update status booking
    public function change(Request $request ,$id)
    {
//        dd($id);
//        $data = $request->except('_token', $id);
        $booking = new CarBooking();
        $booking = CarBooking::find($id);
        $booking->status = $request->get('status','2');
        $booking->fill($request->all());
        $booking->save();
        return $booking;
    }

//===========profile_member============
    public function profile_member()
    {
        return view('front-end.admin_user.profile_member');
    }

}
