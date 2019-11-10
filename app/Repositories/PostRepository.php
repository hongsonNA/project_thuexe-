<?php

namespace App\Repositories;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;

class PostRepository implements VehicelRepositoryInterface
{
    public function AllDatatable()
    {
        $post = Post::all();
        $cut_string = [];
        foreach ($post as $k => $value) {
            $cut_string[$k] = $value;
            $cut_string[$k]['summary'] = substr($value['summary'], 0, 100) . '...';
        }

        return Datatables::of($cut_string)
            ->editColumn('user_id', function ($p) {
                return $p['user']['name'];
            })
            ->addColumn('action', function ($p) {
                return '<a href="' . route('post_edit', $p->id) . '" class="btn btn-link btn-info btn-just-icon edit">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                        </a>
                       
                        <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                        </a>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Xóa bài viết</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                    Bạn có chắc chắn muốn xóa bài viết này không?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <a href="' . route('post_remove', $p->id) . '" class="btn btn-danger">Xóa</a>                      
                              </div>
                            </div>
                          </div>
                        </div>';
            })->rawColumns(['user_id', 'action'])
            ->make(true);
    }

    public function store($request)
    {
        $post = New Post();

        if ($request->hasFile('image_posts')) {
            $images_File = $request->file('image_posts');
            $FileName = 'image_post' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
            $image_resize->save(public_path('image_upload/post/' . $FileName));
            $post->image_posts = $FileName;
        } else {
            $post->image_posts = "default.jpg";
        }

        $post->user_id = (Auth::user()->id);
        $post->fill($request->all());

        if ($post->save()) {
            $mess_add = "Thêm mới bài viết thành công.";
        }

        return redirect()->route('post_list', compact('post'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $cate = Category::all();
        $post = Post::find($id);

        if (empty($post)) {
            return view('admin.post.post_list');
        }

        return view('admin.post.edit_post', compact('post', 'cate'));
    }

    public function update($request, $id)
    {
        $post = Post::find($id);
        if (empty($post)) {
            return view('admin.user.edit_user');
        } else {
            if ($request->hasFile('image_posts')) {
                $images_File = $request->file('image_posts');
                $FileName = 'image_post' . '_' . time() . '.' . $images_File->extension();
                $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
                $image_resize->save(public_path('image_upload/post/' . $FileName));
                $post->image_posts = $FileName;
            }
            $post->fill($request->all());
            $mess_update = "";
            if ( $post->save()) {
                $mess_update = "Sửa bài viết thành công";
            }
        }

        return redirect()->route('post_list', compact('post'))->with('mess_update', $mess_update);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $remove_post = Post::destroy($id);
        } else {
            return view('admin.post.post_list');
        }

        return redirect()->route('post_list', compact('post'));
    }
}
