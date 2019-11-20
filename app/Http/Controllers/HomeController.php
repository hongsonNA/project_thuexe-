<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\Post;
use App\Model\User;
use App\Model\Category;
use App\Model\City;
use mysql_xdevapi\Table;
use App\Model\managerList;
use App\Model\Comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application include_dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $city = city::All();
        $category = category::All();
        return view('front-end.index',compact('category'),compact('city'));
    }

    public  function about(){
        return view('front-end.about');
    }
    public  function contact(){
        return view('front-end.contact');
    }
    public function  cate(){
        $list_cate = DB::table('vehicles')->paginate(10);
        return view('front-end.category',compact('list_cate'));
    }
    public function news(){
        $posts = DB::table('posts')->paginate(5);
        //dd($posts->toArray());
        return view('front-end.news',['posts'=> $posts]);
    }
    public function profile(){
        return view('front-end.profile');
    }
    public function  update_account(Request $request, $id){
       $data = $request->except('_token',$id);
        $update_us = User::find($id);
        $message = '';
        if ( $update_us->update($data)){
            $message='Câp nhật thành công';
        }

        return redirect()->back()->with('message', $message);
    }
    //support
    public function support(){
        return view('front-end.support');
    }

    public function admin_us(){
        return view('front-end.admin_user.admin_us');
    }
// combobox home
    public function state($id)
    {
        $states = DB::table('districts')
                        ->where("city_id",$id)
                        ->pluck("name");
        return response()->json($states);

    }

    public function detail($id)
    {
        $vechcles = managerList::find($id);
       return view('front-end.detail',compact('vechcles'));
    }
    public function detail_news($id)
    {
        $post = Post::find($id);
        $comment = Comments::all();
        return view('front-end.detail_news',compact('post'),compact('comment'));
    }
    public function post_comment(Request $request){
            $data = $request->except('_token');

            $comment_post=[$data];
            dd($comment_post);
            Comments::insert($comment_post);

return back();
    }
    //search form
    public function search_car(Request $request)
    {

        $cate_id = $request->get('cate_id');

//        $seat = $request->get('seat');
        $city_id = $request->get('city_id');
        $district_id = $request->get('district_id');

        $searchQuery = managerList::where('cate_id','like',"%$cate_id%")
//                                    ->orWhere('seat','like',"%$seat%")
                                    ->orWhere('city_id','like',"%$city_id%")
                                    ->orWhere('district_id','like',"%$district_id%");

        return view('front-end.search',compact('searchQuery'));
    }
}
