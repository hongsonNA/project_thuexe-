<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ModelCarRequest;
use App\Repositories\ModelCarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModelCarController extends Controller
{
    protected $ModelCarRepository;

    public function __construct(ModelCarRepository $ModelCarRepository)
    {
        $this->ModelCarRepository = $ModelCarRepository;
    }

    public function index()
    {
        return view('admin.model.model_list');
    }

    public function AllDatatable()
    {
        return $this->ModelCarRepository->AllDatatable();

    }

    public function create()
    {
        return view('admin.model.add_model');
    }

    public function store(ModelCarRequest $request)
    {
        return $this->ModelCarRepository->store($request);
    }

    public function edit($id)
    {
        return $this->ModelCarRepository->edit($id);
    }

    public function update(ModelCarRequest $request, $id)
    {
        return $this->ModelCarRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->ModelCarRepository->destroy($id);
    }
}
