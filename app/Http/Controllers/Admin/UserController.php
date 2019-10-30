<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAdminRequest;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function user_list()
    {
        return view('admin.user.user_list');
    }

    public function allUser()
    {
        return Datatables::of(User::all())
            ->addColumn('action', function ($user) {
                return '<a href="' . route('user_edit', $user->id) . '">
                            <button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="Sửa tài khoản" title="">
                                <i class="material-icons">edit</i>
                            <div class="ripple-container"></div></button>
                        </a>
                        
                        <a href="" OnClick="return confirm(\'Bạn có chắc chắn muốn xóa tài khoản không?\')">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="Xóa tài khoản" title="">
                                <i class="material-icons">close</i>
                            <div class="ripple-container"></div></button>
                        </a>';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function user_add()
    {
        return view('admin.user.add_user');
    }

    public function user_create(UserAdminRequest $request)
    {
        $user = New User();

        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image_user' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
            $image_resize->save(public_path('image_upload/user/' . $FileName));
            $user->image = $FileName;
        } else {
            $user->image = "default.jpg";
        }
        $user->fill($request->all());
        $user->password = Hash::make($request['password']);

        $user->save();

        return redirect()->route('user_list', compact('user'));
    }

    public function user_edit($id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return view('admin.user.user_list');
        }

        return view('admin.user.edit_user', compact('user'));
    }

    public function user_update(UserAdminRequest $request, $id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return view('admin.user.edit_user');
        } else {
            if ($request->hasFile('image')) {
                $images_File = $request->file('image');
                $FileName = 'image_user' . '_' . time() . '.' . $images_File->extension();
                $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
                $image_resize->save(public_path('image_upload/user/' . $FileName));
                $user->image = $FileName;
            }
            $user->fill($request->all());

            $user->save();
        }

        return redirect()->route('user_list', compact('user'));
    }

    public function user_remove($id)
    {
        $user = User::destroy($id);

        return redirect()->route('user_list', compact('user'));
    }
}
