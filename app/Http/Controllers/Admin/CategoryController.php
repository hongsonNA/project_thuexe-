<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    protected $CategoryRepository;

    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }

    public function index()
    {
        return view('admin.category.category_list');
    }

    public function AllDatatable()
    {
        return $this->CategoryRepository->AllDatatable();

    }

    public function create()
    {
        return view('admin.category.add_category');
    }

    public function store(CategoryRequest $request)
    {
        return $this->CategoryRepository->store($request);
    }

    public function edit($id)
    {
        return $this->CategoryRepository->edit($id);
    }

    public function update(CategoryRequest $request, $id)
    {
        return $this->CategoryRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->CategoryRepository->destroy($id);
    }
}
