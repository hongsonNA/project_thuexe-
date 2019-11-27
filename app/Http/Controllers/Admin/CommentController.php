<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Model\Comments;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class CommentController extends Controller
{
    public function comment()
    {
        $comment = DB::table('comments')->paginate(5);
        $comments = DB::table('comments')->where('status','=','2')->get();
        $com = DB::table('comments')->where('status')->get();
//        $queryName = DB::table('users')
//                            ->join('comments','users.name','=','comments.user_id')
//                            ->where('comments.id','=','9')->get();
//        $queryName = DB::select("SELECT users.name FROM users,comments WHERE
//    users.id = comments.user_id and comments.id=9");
        $queryName = DB::select('SELECT users.name FROM users,comments WHERE users.id = comments.id');

      return view('admin.comment.comment_list',compact('comment','comments','queryName'));
    }
    public function remote_comment($id)
    {
       $remote = Comments::destroy($id);
       return back();
    }
    public function update_cm(Request $request, $id)
    {
       $status = $request->get('status');
       $data = $request->except('_token',$id);
       $acep = Comments::find($id);
        $acep->update($status);



    }


}
