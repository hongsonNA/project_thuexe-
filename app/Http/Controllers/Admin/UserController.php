<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAdminRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    protected $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index()
    {
//        if (!Auth::check() || Auth::user()->role == 10){
            return view('admin.user.user_list');
//        }
//        return redirect()->route('dashboard');
    }

    public function AllDatatable()
    {
        return $this->UserRepository->AllDatatable();
    }

    public function create()
    {
        return view('admin.user.add_user');
    }

    public function store(UserAdminRequest $request)
    {
        return $this->UserRepository->store($request);
    }

    public function edit($id)
    {
        return $this->UserRepository->edit($id);
    }

    public function update(UserAdminRequest $request, $id)
    {
        return $this->UserRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->UserRepository->destroy($id);
    }
}
