<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user_list()
    {
        $user = User::all();

        return view('admin.user.user_list', compact('user'));
    }

    public function user_add()
    {
        return view('admin.user.add_user');
    }
}
