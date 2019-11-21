<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Model\Comments;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function comment()
    {
        $comment = DB::table('comments')->paginate(5);
      return view('admin.comment.comment_list',compact('comment'));
    }
    public function remote_comment($id)
    {
       $remote = Comments::destroy($id);
       return back();
    }
}
