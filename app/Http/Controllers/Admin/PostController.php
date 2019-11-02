<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\VehicelRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    protected $PostRepository;

    public function __construct(VehicelRepositoryInterface $PostRepository)
    {
        $this->PostRepository = $PostRepository;
    }


    public function index()
    {
        return view('admin.post.post_list');
    }

    public function AllDatatable()
    {
        $allDatatable = $this->PostRepository->AllDatatable();

        return $allDatatable;
    }

    public function create()
    {
        return view('admin.post.add_post');
    }

    public function store(Request $request)
    {
        $post = $this->PostRepository->store($request);

        return $post;
    }

    public function edit($id)
    {
        $post = $this->PostRepository->edit($id);

        return $post;
    }

    public function update(Request $request, $id)
    {
        $post = $this->PostRepository->update($request, $id);

        return $post;
    }

    public function destroy($id)
    {
        $post = $this->PostRepository->destroy($id);

        return $post;
    }

}
