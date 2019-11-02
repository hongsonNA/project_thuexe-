<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAdminRequest;
use App\Repositories\VehicelRepositoryInterface;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    protected $UserRepository;

    public function __construct(VehicelRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index()
    {
        return view('admin.user.user_list');
    }

    public function AllDatatable()
    {
        $allDatatable = $this->UserRepository->AllDatatable();

        return $allDatatable;
    }

    public function create()
    {
        return view('admin.user.add_user');
    }

    public function store(UserAdminRequest $request)
    {
        $user = $this->UserRepository->store($request);

        return $user;
    }

    public function edit($id)
    {
        $user = $this->UserRepository->edit($id);

        return $user;
    }

    public function update(UserAdminRequest $request, $id)
    {
        $user = $this->UserRepository->update($request, $id);

        return $user;
    }

    public function destroy($id)
    {
        $user = $this->UserRepository->destroy($id);

        return $user;
    }
}
