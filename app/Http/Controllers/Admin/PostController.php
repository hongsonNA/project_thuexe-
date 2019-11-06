<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{

    protected $PostRepository;

    public function __construct(PostRepository $PostRepository)
    {
        $this->PostRepository = $PostRepository;
    }


    public function index()
    {
        return view('admin.post.post_list');
    }

    public function AllDatatable()
    {
        return $this->PostRepository->AllDatatable();
    }

    public function create()
    {
        return view('admin.post.add_post');
    }

    public function store(Request $request)
    {
        return $this->PostRepository->store($request);
    }

    public function edit($id)
    {
        return $this->PostRepository->edit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->PostRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->PostRepository->destroy($id);
    }

}
