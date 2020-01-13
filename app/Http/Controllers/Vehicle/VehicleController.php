<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerRequest;
use App\Model\CarBooking;
use App\Model\City;
use App\Model\Comment;
use App\Model\Image;
use App\Model\ModelVehicle;
use App\Model\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

//use App\Model\Image as VehicleImage;
//use Illuminate\Routing\Route;
//use Image;

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
        $mess = 'thanh cong ';

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

        return view('front-end.admin_user.manage_post.edit', compact('maga_edit', 'citys', 'model_car', 'image_array'));
    }

    public function update_vehicles(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        if ($listmul['status'] == 3) {
            $mes = '';
            $listmul->status = $request->get('status', 1);
            $images_File = $request->file('image_vehicle');
            $listmul->fill($request->all());
            if ($listmul->save()) {
                if ($images_File) {
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
            return redirect()->route('waiting_target', compact('listmul'))->with('mess', $mes);
        }


        if (empty($listmul)) {
            return view('front-end.admin_user.manage_post.manage_list');
        } else {
            $mes = '';
            $images_File = $request->file('image_vehicle');
            $listmul->fill($request->all());
            if ($listmul->save()) {
                if ($images_File) {
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

    public function trash()
    {
        $manage = Vehicle::all()->where('is_trash', 1);
        $image_array = [];
        foreach ($manage as $key => $value) {
            $image = Image::where('vehicle_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['image_vehicle'] = $image;
        }
        return view('front-end.admin_user.manage_post.trash_list', compact('image_array'));
    }

    public function moveTrash(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        $mes = '';
        $listmul->is_trash = $request->get('is_trash', 1);
        $images_File = $request->file('image_vehicle');
        $listmul->fill($request->all());
        if ($listmul->save()) {
            $mes = 'thanh cong ';
        }
        return back()->with('mess', $mes);

    }

    public function restore(Request $request, $id)
    {
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        $mes = '';
        $listmul->is_trash = $request->get('is_trash', 0);
        $images_File = $request->file('image_vehicle');
        $listmul->fill($request->all());
        if ($listmul->save()) {
            $mes = 'thanh cong ';
        }
        return back()->with('mess', $mes);

    }

    public function remote(Request $request, $id)
    {
//        $remote_id = Vehicle::find($id);

//        if($remote_id['is_trash'] == 1){
//            if ($remote_id) {
//                $remove_vehicle = Vehicle::destroy($id);
//                if ($remove_vehicle) {
//                    $delete_img = Image::where('vehicle_id', $id)->delete();
//                }
//            } else {
//                abort(404);
//            }
//            $managerList = Vehicle::destroy($id);
//            return redirect()->route('trash', compact('managerList'));
//        }

//        if ($remote_id) {
//            $remove_vehicle = Vehicle::destroy($id);
//            if ($remove_vehicle) {
//                $delete_img = Image::where('vehicle_id', $id)->delete();
//            }
//        } else {
//            abort(404);
//        }
//        $managerList = Vehicle::destroy($id);
        $listmul = new Vehicle();
        $listmul = Vehicle::find($id);
        $mes = '';
        $listmul->is_trash = $request->get('is_trash', 2);
        $images_File = $request->file('image_vehicle');
        $listmul->fill($request->all());
        if ($listmul->save()) {
            $mes = 'thanh cong ';
        }
        return back()->with('mess', $mes);
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
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting', compact('all'));
    }

    public function waiting_car1()
    {
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting1', compact('all'));
    }
    public function waiting_car2()
    {
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting2', compact('all'));
    }
    public function waiting_car3()
    {
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting3', compact('all'));
    }
    public function waiting_car4()
    {
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting4', compact('all'));
    }
    public function waiting_car5()
    {
        $all = CarBooking::all()->where('is_delete', '=', 0);

        return view('front-end.admin_user.manage_post.waiting5', compact('all'));
    }

    public function AllDatatable()
    {
        $waiting = CarBooking::all()->where('is_delete', '=', 0);

//        $waiting = DB::table('car_bookings')->where('status', '1')
//            ->orWhere('is_delete', 0)
//            ->get()->toArray();

        return Datatables::of($waiting)
            ->editColumn('vehicle_id', function ($waiting) {
                return $waiting['vehicle']['name'];
            })
            ->addColumn('status', function ($waiting) {
                if ($waiting['status'] == 2) {
                    return '
                <a href="javascript:;" data-id="' . $waiting->id . '"  class="changeSucesed btn btn-warning"data-original-title="" title="">Đã xác nhận</a>
                <a href="javascript:;"  data-id="' . $waiting->id . '"  class="changeDanger btn btn-danger"data-original-title="" title=""><i class="fa fa-times"></i></a>';

                }
                if ($waiting['status'] == 3) {
                    return '
                <a href="javascript:;" data-id="' . $waiting->id . '"  class="doing btn btn-info"data-original-title="" title="">Đang thực hiện</a>';
                }
                if ($waiting['status'] == 4) {
                    return '
                <a href="javascript:;"  class="btn btn-success"data-original-title="" title="">Đã hoàn thành</a>
                 <a href="javascript:;"  data-id="' . $waiting->id . '"  class="dangerCar btn btn-danger"
                                                   data-original-title="" title="">
                                                    <i class="fa fa-times"></i>
                                                </a>';
                }
                if ($waiting['status'] == 5) {
                    return '
                <a href="javascript:;"   class="btn btn-danger"data-original-title="" title="">Bị hủy</a>';
                }
                return '
                <a onclick="return myForm();" href="javascript:;" data-id="' . $waiting->id . '"  class="changeStatus btn btn-success"
                                                   data-original-title="" title="">
                                                    <i class="fa fa-edit">Xác nhận</i>
                                                </a>
                                                <a href="javascript:;"  data-id="' . $waiting->id . '"  class="changeDanger btn btn-danger"
                                                   data-original-title="" title="">
                                                    <i class="fa fa-times">Từ chối</i>
                                                </a>


                                                ';
            })->rawColumns(['status'])
            ->make(true);
    }
//dangerCar
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
        if ($booking['status'] == 1) {
            $booking->status = 2;
        } elseif ($booking['status'] == 2) {
            $booking->status = 3;
        } elseif ($booking['status'] == 3) {
            $booking->status = 4;
        }
//        $booking->fill($request->all());
        $booking->save();
        return $booking;
    }

// =====DANGER======
    public function danger(Request $request, $id)
    {
        $booking = new CarBooking();
        $booking = CarBooking::find($id);
        if ($booking['status'] == 1 || $booking['status'] == 2) {
            $booking->status = $request->get('status', '5');
        } elseif ($booking['status'] == 4) {
            $booking->is_delete = $request->get('is_delete', '2');
        }
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


    public function changeStatus($id)
    {
        $statusVehicle = Vehicle::find($id);

        if (!empty($statusVehicle)) {
            if ($statusVehicle->status == 2) {
                $statusVehicle->status = 1;
                $statusVehicle->save();

//            code gui mail
                $to_name = "le van hieu"; // ten nguoi nhan
                $to_email = "hieulv@baokim.vn"; // mail nguoi nhan
                $data = array('name' => 'ten nguoi gui', 'body' => 'xe ban da het han');
                try {
                    Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
                        $message->to($to_email, $to_name)
                            ->subject('V/v het han dang kiem xe');
                        $message->from('hson8711@gmail.com', 'Test Mail');
                    });
                } catch (\Exception $e) {
                    Log::info($e->getMessage() . '-' . $e->getFile() . '-' . $e->getLine());
                }
                return redirect()->route('waiting_target');

            }
        }
        return Response::json(array('redirect' => Route('waiting_target')));
    }
}

