<?php

namespace App\Http\Controllers;

use App\Model\Comment;
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
use App\Model\ModelCar;
use App\Model\District;
use App\Http\Requests\BookingRequest;

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
        $model_car = ModelCar::All();

        return view('front-end.index', compact('category','model_car'), compact('city','car','show_news'));
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
        $model_car = ModelCar::All();
        $list_cate = managerList::with([
            'modelCar'=>function($query){
                $query->select(['id','name']);
            }])->get();
//dd($list_cate);
//        $list_cate = DB::table('vehicles')->paginate(10);
        return view('front-end.category', compact('list_cate'),compact('category','city','model_car'));
    }

    public function news()
    {
        $posts = DB::table('posts')->paginate(5);
        //hot_view
        $allNews = Post::all()->take(4);
        //dd($posts->toArray());
        return view('front-end.news', ['posts' => $posts], compact('allNews'));
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
//        return ' <select name="city_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_city">
//                                            <option value="">--Chọn thành phố--</option>
//                                           foreach($states as $key => $id){
//                                                    <option id="distri" value="{{ $id->id }}" >{{ $id->name }}</option>
//                                            }
//                                        </select>';

    }
//    cate
    public function state_cate($id)
    {

        $states = DB::table('districts')
            ->where("city_id", $id)->get();
        $output='';
           foreach ($states as $dis_id){
               $output .='<option id="distri" value="'.$dis_id->id.'" >'.$dis_id->name.'</option>';
            }
           return $output;
    }
    public function detail($id)
    {
        $comment = Comments::all()->where('vehicle_id','=',$id);

        $list_cate = managerList::with([
            'CarBooking'=>function($query){
                $query->where('vehicle_id');
            }]);
        //topics car
        $topic = DB::table('vehicles')->where ('id', '!=', $id)
                            ->orderByDesc('id')
                            ->take(3)
                            ->get();
        $vechcles = managerList::find($id);

        return view('front-end.detail', compact('vechcles','comment','topic'),compact('list_cate'));
    }

    public function detail_news($id)
    {
        $topic = DB::table('posts')->where('id','!=',$id)
                            ->orderByDesc('id')
                            ->take(1)
                            ->get();
        $post = Post::find($id);
        $comment = Comments::all()->where('post_id','=',$id);
        $comments = Comments::with([
            'user' => function($comments){
                $comments->where('id','name');
            }
        ])->get();
        return view('front-end.detail_news', compact('post'), compact('comment','topic','comments'));
    }

    public function post_comment(Request $request, $id)
    {
//        $id_us = (Auth::user()->id);
        $posts = new Comments();
        $com_post = Post::find($id);
        $posts->post_id = $id;
        $posts->vehicle_id = $id;
        $posts->user_id = (Auth::user()->id);
        $posts->status = $request->get('status','1');
        $posts->content = $request->get('content');
        //        $data = $request->except('_token');
        $posts->fill($request->all());
        $posts->save();
        return back();
    }

    //search form
    public function search_car(Request $request)
    {
        $cate_id = $request->get('cate_id');
        $model_id = $request->get('model_id');
        $city_id = $request->get('city_id');
        $district_id = $request->get('district_id');

        $searchQuery = managerList::where('cate_id', 'like', "%$cate_id%")
            ->where('model_id', 'like', "%$model_id%")
            ->where('city_id', 'like', "%$city_id%")
            ->where('district_id', 'like', "%$district_id%")->get();
//        dd($searchQuery);
        return view('front-end.search', compact('searchQuery'));
    }
    public function search_cate(Request $request)
    {
        $cate_id = $request->get('cate_id');
        $seat = $request->get('seat');
        $model_id = $request->get('model_id');
        $district_id = $request->get('district_id');
        $city_id = $request->get('city_id');
        $searchQuery = managerList::where('cate_id', 'like', "%$cate_id%")
            ->where('district_id', 'like', "%$district_id%")
            ->where('seat', 'like', "%$seat%")
            ->where('model_id', 'like', "%$model_id%")
            ->where('city_id', 'like', "%$city_id%")->get();
        return view('front-end.search', compact('searchQuery'));
        dd($searchQuery);
    }

//    report-comment
    public function report_comment(Request $request, $id)
    {
        $report_uID = Comments::find($id);
        $report_uID->report_content = $request->get('report_content');
        $report_uID->status = $request->get('status','2');
        $message = '';
        if ($report_uID->save()) {
            $message = 'Đã báo cáo vi pham ';
        }
        return redirect()->back()->with('message', $message);
    }
    //======booking-car=======
    public function booking_car(BookingRequest $request, $id)
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
//loar more News
 public function loarmore(Request $request)
 {
    if ($request->ajax())
    {
        if ($request->id > 0){
            $data = DB::table('posts')
                ->where('id','<',$request->id)
                ->orderByDesc('id')
                ->limit(1)->get();
        }else{
            $data = DB::table('posts')
                ->orderByDesc('id')
                ->limit(1)
                ->get();
        }
//        dd($data);
        if (!$data->isEmpty()){
            foreach ($data as $id){
                return '<div class="col-md-6">
                                    <div class="post-block-style">
                                        <div class="post-thumb">
                                            <a href="" data-toggle="tooltip" title="'.$id->title .'">
                                                    <img class="img-fluid" src="'.asset('image_upload/post/'.$id->image_posts).'"  alt="">
                                            </a>
                                            <div class="grid-cat">
                                                <a class="post-cat lifestyle" href="#">Lifestyle</a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="post-title title-md  " data-toggle="tooltip" title="{{ $id->title }}">
                                                <a  href="'.route('detail_news', $id->id).'">'.$id->title.'</a>
                                            </h2>
                                            <div class="post-meta mb-7">
                                                <span class="post-author"><i class="fa fa-user"></i> John Doe</span>
                                                <span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
                                            </div>
                                            <p>'.$id->summary.'</p>
                                        </div><!-- Post content end -->
                                    </div>
                                </div>';
            }
        }
    }
 }

// history
 public function history()
 {
     $user_id = (Auth::user()->id);
     $history = CarBooking::where('user_id',$user_id)->get();

     return view('front-end.history_booking',compact('history'));
 }

}
