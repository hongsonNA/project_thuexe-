<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Model\Comments;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class CommentController extends Controller
{
    public function comment()
    {
        $comments = Comment::with([
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            }])
            ->get();
        return view('admin.comment.comment_list', compact( 'comments'));
    }

    public function removeCM($id)
    {
        $remote = Comments::destroy($id);
        return back();
    }

    public function update_cm(Request $request, $id)
    {
        $status = $request->get('status');
        $data = $request->except('_token', $id);
        $acep = Comments::find($id);
        $acep->update($status);

    }


}
