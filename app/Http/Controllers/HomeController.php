<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Model\CarBooking;
use App\Model\City;
use App\Model\Comment;
use App\Model\Image;
use App\Model\ModelVehicle;
use App\Model\Post;
use App\Model\User;
use App\Model\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware(['auth', 'verified']);
	}

	/**
	 * Show the application include_dashboard.
	 *
	 * @param Request $request
	 * @return \Illuminate\Contracts\Support\Renderable
	 */

	public function index(Request $request) {
		$city = city::All();
		//news

		$car = Vehicle::with([
				'modelVehicles' => function ($query) {
					$query->select(['id', 'name']);
				}]);
		//        dd($car);
		$show_news = Post::All();
		$model_car = ModelVehicle::All();

		return view('front-end.index', compact('model_car', 'city', 'car', 'show_news'));
	}

	public function about() {
		return view('front-end.about');
	}

	public function contact() {
		return view('front-end.contact');
	}

	public function news() {
		$posts = DB::table('posts')->paginate(5);
		//hot_view
		$allNews = Post::all()->take(4);
		//dd($posts->toArray());
		return view('front-end.news', ['posts' => $posts], compact('allNews'));
	}

	public function profile() {
		return view('front-end.profile');
	}

	public function update_account(Request $request, $id) {
		$data      = $request->except('_token', $id);
		$update_us = User::find($id);
		$message   = '';
		if ($update_us->update($data)) {
			$message = 'Câp nhật thành công';
		}

		return redirect()->back()->with('message', $message);
	}

	//support
	public function support() {
		return view('front-end.support');
	}

	public function admin_us() {
		return view('front-end.admin_user.admin_us');
	}

	// combobox home
	public function state($id) {

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
	public function state_cate($id) {

		$states = DB::table('districts')
			->where("city_id", $id)	->get();
		$output = '';
		foreach ($states as $dis_id) {
			$output .= '<option id="distri" value="'.$dis_id->id.'" >'.$dis_id->name.'</option>';
		}
		return $output;
	}

	public function detail($id) {
		$getAll = CarBooking::where('vehicle_id', $id)->get();
		$res    = array();
		$getRes = null;
		foreach ($getAll as $key_id) {
			$res[] = array(
				'start_date' => date("d-m-Y", strtotime($key_id['start_date'])),
				'end_date'   => date("d-m-Y", strtotime($key_id['end_date'])));
		}
		$getRes = $res;
		// dd($getRes);
		// echo json_encode($res);
		// dd($res);
		$comment = Comment::all()->where('vehicle_id', '=', $id);
		$findCar = Vehicle::find($id);
		if ($findCar) {
			$image                        = Image::where('vehicle_id', $findCar['id'])->get()->toArray();
			$image_array['image_vehicle'] = $image;
		} else {
			abort(404);
		}
		$topic = DB::table('vehicles')->where('id', '!=', $id)
		                              ->orderByDesc('id')
		                              ->take(3)
		                              ->get();
		$vechcles = Vehicle::find($id);
		//        ten chu xe va ngay het han dang kiem
		$vechcle = DB::table('vehicles')
			->join('users', function ($join) use ($vechcles) {
				$join->on('users.id', '=', 'vehicles.user_id')
					->where('users.id', '=', $vechcles->user_id);
			})
			->join('targets', function ($join) use ($vechcles) {
				$join->on('vehicles.id', '=', 'targets.vehicle_id')
					->where('targets.vehicle_id', '=', $vechcles->id);
			})
			->get()	->toArray();

		$comments_dl = Comment::with([
				'user' => function ($query) {
					$query->select('id', 'name');
				},
				'Vehicle' => function ($query) {
					$query->select('id', 'name');
				}
			])->get()->toArray();
		// Lich xe da dat
		$listBooking = CarBooking::where('vehicle_id', $id)->get();

		return view('front-end.detail', compact('vechcles', 'vechcle', 'comment', 'topic', 'comments_dl', 'image_array', 'listBooking'), compact('findCar', 'res'));
	}

	public function detail_news($id) {
		$topic = DB::table('posts')->where('id', '!=', $id)
		                           ->orderByDesc('id')
		                           ->take(1)
		                           ->get();
		$post = Post::find($id);

		$comments = Comment::with([
				'user' => function ($query) {
					$query->select('id', 'name');
				},
				'post' => function ($query) {
					$query->select('id', 'title');
				}
			])->get()->toArray();

		return view('front-end.detail_news', compact('post'), compact('topic', 'comments'));
	}

	public function post_comment(Request $request, $id) {
		$com_post       = Post::find($id);
		$posts          = new Comment();
		$posts->post_id = $id;
		$posts->user_id = (Auth::user()->id);
		$posts->content = $request->get('content');
		$posts->save();
		return back();
	}

	public function vehicle_comment(Request $request, $id) {
		$com_post               = Vehicle::find($id);
		$cm_vehicel             = new Comment();
		$cm_vehicel->vehicle_id = $id;
		$cm_vehicel->user_id    = (Auth::user()->id);
		$cm_vehicel->content    = $request->get('content');
		$cm_vehicel->save();
		return back();
	}

	//search form
	public function search_car(Request $request) {
		//		$manage = Vehicle::all();

		$model_id   = $request->get('model_id');
		$city_id    = $request->get('city_id');
		$start_date = $request->get('start_date');
		$end_date   = $request->get('end_date');

		$checkCarbooking = CarBooking::where('
		start_date', '>=', date('Y-m-d', strtotime($start_date.'00:00:00')))
			->where('end_date', '<=', date('Y-m-d', strtotime($end_date.'23:59:59')))	->get()	->toArray();
		// $checkCarbooking = CarBooking::where('start_date','>',12)->orWhere()
		$message = '';
		if ($checkCarbooking) {
			$message = 'khong tim thay xe ';

			return back()->with('message', $message);
		} else {
			$searchQuery = Vehicle::where('model_id', 'like', "%$model_id%")
				->where('city_id', 'like', "%$city_id%")
				->get();
			$image_array = [];
			foreach ($searchQuery as $key => $value) {
				$image                              = Image::where('vehicle_id', $value['id'])->first();
				$image_array[$key]                  = $value;
				$image_array[$key]['image_vehicle'] = $image;
			}
			//                dd($image_array);
			return view('front-end.search', compact('searchQuery', 'image_array'));

		}
	}

	//    report-comment
	public function report_comment(Request $request, $id) {
		$report                 = Comment::find($id);
		$report->report_content = $request->get('report_content');
		$report->status         = $request->get('2');

		$message = '';
		if ($report->save()) {
			$message = 'Đã báo cáo vi pham ';
		}
		return redirect()->back()->with('message', $message);
	}

	//======booking-car=======
	public function booking_car(BookingRequest $request, $id) {

		$getList = new CarBooking();

		// $checkBooking = DB::select('');

		// dd($checkBooking);

		$book = Vehicle::find($id);
		$all  = [
			$getList->vehicle_id = $book->id,
		];
		$getList->vehicle_id = $id;
		$getList->user_id    = (Auth::user()->id);
		$getList->fill($request->all());
		//		        dd($getList);
		$alert = '';
		if ($getList->save()) {
			$alert = "Đăng ký thông tin thành công";
		}
		return back()->with('alert', $alert);
	}
	//    show news home
	//loar more News
	public function loarmore(Request $request) {
		if ($request->ajax()) {
			if ($request->id > 0) {
				$data = DB::table('posts')
					->where('id', '<', $request->id)
					->orderByDesc('id')
					->limit(1)	->get();
			} else {
				$data = DB::table('posts')
					->orderByDesc('id')
					->limit(1)
					->get();
			}
			//        dd($data);
			if (!$data->isEmpty()) {
				foreach ($data as $id) {
					return '<div class="col-md-6">
                                    <div class="post-block-style">
                                        <div class="post-thumb">
                                            <a href="" data-toggle="tooltip" title="'.$id->title.'">
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
	public function history() {
		$user_id = (Auth::user()->id);
		$history = CarBooking::with([
				'user' => function ($query) {
					$query->select(['id', 'name', 'email']);
				},
				'vehicle' => function ($query) {
					$query->select(['id', 'user_id', 'name', 'status']);
				}
			])->get()->toArray();

		//        $acb =
		//dd($history);
		return view('front-end.history_booking', compact('history'));
	}

	public function deleteBooking(Request $request, $id) {
		$update_id            = new CarBooking();
		$update_id            = CarBooking::find($id);
		$update_id->is_delete = 1;
		$update_id->fill($request->all());
		$update_id->save();
		//        $remote = CarBooking::destroy($id);
		return back();
	}

	//  =====danh muc xe theo tai khoan====
	public function cateUser(Request $request, $id) {
		$carUser = Vehicle::all()->where('user_id', $id);
		//    dd($carUser);
		return view('front-end.categoryCar_user', compact('carUser'));
	}

}
