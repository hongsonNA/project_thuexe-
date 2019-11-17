<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\managerList;
use Intervention\Image\ImageManagerStatic as Image;


class ManagerUsController extends Controller
{
    public function manage()
    {
        $manage = managerList::All();
        return view('front-end.admin_user.manage_post.manage_list',compact('manage'));
    }
    public function add()
    {
        $city = city::All();
        $category = category::All();
        return view('front-end.admin_user.manage_post.edit_add',compact('city'),compact('category'));
    }
    public function states($id)
    {
        $states = DB::table('districts')
            ->where("city_id",$id)
            ->pluck("name");
        return response()->json($states);
    }
    public function stateU($id)
    {
        $states = DB::table('districts')
            ->where("city_id",$id)
            ->pluck("name");
        return response()->json($states);
    }
    public function edit(managerList $managerList)
    {

        return view('front-end.admin_user.manage_post.edit_add',compact('managerList'));
    }

    public function create(Request $request)
    {
        $listMul = new managerList();
//        if ($request->hasFile('image')){
//            $image_vechi = $request->file('image');
//            $name_image =time().'.'.$image_vechi->getClientOriginalName();
//            $path_image  = public_path('image_upload/img_vehicle/'.$name_image);
//            $image_vechi->move($path_image, $name_image);
//            $this->save();
//        }
        $listMul->cate_id=$request->get('cate_id');
        $listMul->city_id = $request->get('city_id');
        $listMul->district_id = $request->get('district_id');
        $listMul->address= $request->get('address');
        $listMul->user_id = (Auth::user()->id);
        $listMul->status = $request->get('status');

        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
            $image_resize->save(public_path('image_upload/img_vehicle/' . $FileName));
            $listMul->image = $FileName;
        } else {
            $listMul->image = "default_car.jpg";
        }
        $listMul->fill($request->all());
        $listMul->save();
        return redirect()->route('manage_list', compact('listMul'));

    }
    public function edit_vehicles($id)
    {
        $city = city::All();
        $category = category::All();
        $magaEdit = managerList::find($id);
        if (empty($magaEdit)) {
            return view('front-end.admin_user.manage_post.manage_list');
        }

        return view('front-end.admin_user.manage_post.edit', compact('magaEdit', 'category'),compact('city'));
    }
    public function update_vehicles(Request $request ,$id)
    {
        $listMul = new managerList();
        $listMul = managerList::find($id);
//        if ($request->hasFile('image')){
//            $image_vechi = $request->file('image');
//            $name_image =time().'.'.$image_vechi->getClientOriginalName();
//            $path_image  = public_path('image_upload/img_vehicle/'.$name_image);
//            $image_vechi->move($path_image, $name_image);
//            $this->save();
//        }
        $listMul->cate_id=$request->get('cate_id');
        $listMul->city_id = $request->get('city_id');
        $listMul->district_id = $request->get('district_id');
        $listMul->address= $request->get('address');
        $listMul->user_id = (Auth::user()->id);
        $listMul->status = $request->get('status');

        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
            $image_resize->save(public_path('image_upload/img_vehicle/' . $FileName));
            $listMul->image = $FileName;
        } else {
            $listMul->image = "default_car.jpg";
        }
        $listMul->fill($request->all());

        $listMul->save();
        return redirect()->route('manage_list', compact('listMul'));

    }

    public function remote($id)
    {
        $managerList = managerList::destroy($id);
        return redirect()->route('manage_list', compact('managerList'));
    }


}
