<?php

namespace App\Http\Controllers\Member;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return view('front-end.profile');
        }
        return view('auth.register_member', compact('user'));
    }
    public function register_member(Request $request, $id)
    {
            $member = User::find($id);
            $member->role = $request->get('role','2');
            $member->fill($request->all());
            $mess_update = "";
            if ($member->save()) {
                $mess_update = "thành công";
            }

        return back()->with('mess_update', $mess_update);
    }
    //====the end create member =======
}
