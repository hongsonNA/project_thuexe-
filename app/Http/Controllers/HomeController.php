<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\Post;
use App\Model\User;

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

    public function index()
    {
        return view('front-end.index');
    }

    public  function about(){
        return view('front-end.about');
    }
    public  function contact(){
        return view('front-end.contact');
    }
    public function  cate(){
        return view('front-end.category');
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
}
