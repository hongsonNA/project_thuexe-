<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    public function post_list()
    {
        $post = Post::all();

        return view('admin.post.post_list', compact('post'));
    }

    public function post_add()
    {
        return view('admin.post.add_post');
    }

    public function post_create(Request $request)
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

        $post->save();

        return redirect()->route('post_list', compact('post'));
    }

    public function post_edit($id)
    {
        $post = Post::find($id);

        if (empty($post)) {
            return view('admin.post.post_list');
        }

        return view('admin.post.edit_post', compact('post'));
    }

    public function post_update(Request $request, $id)
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

            $post->save();
        }

        return redirect()->route('post_list', compact('post'));
    }

}
