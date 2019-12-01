<?php

namespace App\Http\Controllers;

use Cassandra\Date;
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
use App\Model\CarBooking;
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
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $city = city::All();
        $category = category::All();
        $car = DB::table('vehicles')
            ->offset(1)
            ->take(4)
            ->get();
        //news
        $show_news = Post::All();
        return view('front-end.index', compact('category'), compact('city','car','show_news'));
    }

    public function about()
    {
        return view('front-end.about');
    }

    public function contact()
    {
        return view('front-end.contact');
    }

    public function cate()
    {
        $city = city::All();
        $category = category::All();
        $list_cate = DB::table('vehicles')->paginate(10);
        return view('front-end.category', compact('list_cate'),compact('category','city'));
    }

    public function news()
    {
        $posts = DB::table('posts')->paginate(5);
        //dd($posts->toArray());
        return view('front-end.news', ['posts' => $posts]);
    }

    public function profile()
    {
        return view('front-end.profile');
    }

    public function update_account(Request $request, $id)
    {
        $data = $request->except('_token', $id);
        $update_us = User::find($id);
        $message = '';
        if ($update_us->update($data)) {
            $message = 'Câp nhật thành công';
        }

        return redirect()->back()->with('message', $message);
    }

    //support
    public function support()
    {
        return view('front-end.support');
    }

    public function admin_us()
    {
        return view('front-end.admin_user.admin_us');
    }

// combobox home
    public function state($id)
    {
        $states = DB::table('districts')
            ->where("city_id", $id)
            ->pluck("name");
        return response()->json($states);

    }

    public function detail($id)
    {
        $comment = Comments::all();
        $vechcles = managerList::find($id);
        return view('front-end.detail', compact('vechcles','comment'));
    }

    public function detail_news($id)
    {
        $post = Post::find($id);
        $comment = Comments::all();
        return view('front-end.detail_news', compact('post'), compact('comment'));
    }

    public function post_comment(Request $request, $id)
    {

        $posts = new Comments();
        $com_post = Post::find($id);
        $posts->post_id = $id;
        $posts->user_id = (Auth::user()->id);
        $posts->status = $request->get('status','1');
        $posts->content = $request->get('content');
        dd($posts);
        //        $data = $request->except('_token');
        $posts->fill($request->all());

        return back();
    }

    //search form
    public function search_car(Request $request)
    {
        $cate_id = $request->get('cate_id');

        $seat = $request->get('seat');
        $city_id = $request->get('city_id');
        $district_id = $request->get('district_id');

        $searchQuery = managerList::where('cate_id', 'like', "%$cate_id%")
            ->where('seat', 'like', "%$seat%")
            ->where('city_id', 'like', "%$city_id%")
            ->where('district_id', 'like', "%$district_id%")->get();
//dd($searchQuery);
        return view('front-end.search', compact('searchQuery'));
    }
    public function search_cate(Request $request)
    {
        $cate_id = $request->get('cate_id');
        $seat = $request->get('seat');
        $city_id = $request->get('city_id');
        $searchQuery = managerList::where('cate_id', 'like', "%$cate_id%")
            ->where('seat', 'like', "%$seat%")
            ->where('city_id', 'like', "%$city_id%")->get();
        return view('front-end.search', compact('searchQuery'));
    }

//    report-comment
    public function report_comment(Request $request)
    {

        $report_uID = $request->get('report_uID');

        $data = $request->except('_token', $report_uID);
        $report_cm = Comments::find($report_uID);
        $message = '';
//        $send_port = DB::table('comments')->where('report_content','=',$report_content)
//                                                ->where('user_id','=',$report_uID)
//                                                ->where('status','=',$status);
        if ($report_cm->update($data)) {
            $message = 'Đã báo cáo vi pham ';
        }

        return redirect()->back()->with('message[', $message);
    }
    //======booking-car=======
    public function booking_car(Request $request, $id)
    {

        $getList = new CarBooking();
        $book = managerList::find($id);

        $all = [
            $getList->vehicle_id   =   $book->id,
            $getList->city_id       =   $book->city_id,
            $getList->district_id   =   $book->district_id
        ];
        $getList->vehicle_id = $id;
        $getList->user_id = (Auth::user()->id);
        $getList->status = $request->get('status','1');
        $getList->order_id = $request->get('order_id','1');
        $getList->start_date = $request->get('start_date');
        $getList->end_date = $request->get('end_date');
        $getList->fill($request->all());

        $alert = '';
        if ($getList->save()){
            $alert = "Đăng ký thông tin thành công";
        }
        return back()->with('alert',$alert);



    }
//    show news home



}
