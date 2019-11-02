<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Repositories\VehicelRepositoryInterface;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    protected $CategoryRepository;

    public function __construct(VehicelRepositoryInterface $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }

    public function index()
    {
        return view('admin.category.category_list');
    }

    public function AllDatatable()
    {
        $allCategory = $this->CategoryRepository->AllDatatable();

        return $allCategory;
    }

    public function create()
    {
        return view('admin.category.add_category');
    }

    public function store(CategoryRequest $request)
    {
        $categories = $this->CategoryRepository->store($request);
        return $categories;
    }

    public function edit($id)
    {
        $cate = $this->CategoryRepository->edit($id);

        return $cate;
    }

    public function update(CategoryRequest $request, $id)
    {
        $cate = $this->CategoryRepository->update($request, $id);

        return $cate;
    }

    public function destroy($id)
    {
        $cate = $this->CategoryRepository->destroy($id);

        return $cate;
    }
}
