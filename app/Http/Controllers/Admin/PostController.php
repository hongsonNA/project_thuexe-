<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Model\Category;
use App\Model\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{

    protected $PostRepository;
    public $cate;

    public function __construct(PostRepository $PostRepository)
    {
        $this->PostRepository = $PostRepository;
//        $this->cate = Category::all();
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
        $cate = $this->cate;

        return view('admin.post.add_post', compact('cate'));
    }

    public function store(PostRequest $request)
    {
        return $this->PostRepository->store($request);
    }

    public function edit($id)
    {
        return $this->PostRepository->edit($id);
    }

    public function update(PostRequest $request, $id)
    {
        return $this->PostRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->PostRepository->destroy($id);
    }

}
