<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use App\Models\Thongtinkham;
use App\Models\Loaitin;
use App\Models\Tintuc;

use Illuminate\Http\Request;
use DB;
use Input;
use Auth;
use Validator;
use App\Models\Benhnhan;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($id = -1)
	{
		if ($id == -1) {
			$id = Benhvien::first()->id;
		}

		$loaidichvus = Loaidichvu::where('benhvien_id', $id)->get();
		$loaitins = Loaitin::where('benhvien_id', $id)->get();
		$benhviens = Benhvien::all();
		$phongkhams = DB::table('phongkham')->leftJoin('loaidichvu', 'phongkham.dichvu_id', '=', 'loaidichvu.id')
				->leftJoin('benhvien','benhvien.id','=','loaidichvu.benhvien_id')->where('benhvien.id', $id)->select('phongkham.id','phongkham.ten','phongkham.bacsi')->get();

		$khoas = Khoa::where('benhvien_id', $id)->get();
		$ykienphanhoi = Ykienphanhoi::where('status',1)->get();
		$idBenhvien = $id;
		$user =  Auth::user()->get();
		return view('home', compact('benhviens', 'loaidichvus', 'phongkhams', 'khoas',
		 'user', 'idBenhvien', 'ykienphanhoi', 'loaitins'));
	}

	/**
	 * Category.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function category(Request $request, $id) {
		$tintucs = Tintuc::where('category_id', $id)->get();
		return view('category_news', compact('tintucs'));
	}

	/**
	 * New.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function news(Request $request, $id) {
		$news = Tintuc::with('admin')->find($id);
		return view('detail_new', compact('news'));
	}

	/**
	 * Login.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function login(Request $request) {
		if (Auth::user()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('home');
        }
	}

	/**
	 * Logout.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function logout(Request $request) {
		Auth::user()->logout();
		return redirect()->route('home');
	}

	/**
	 * Update profile.
	 * @return [type] [description]
	 */
	public function updateProfile(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Benhnhan::$rules
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		Auth::user()->get()->update($request->all());
		return redirect()->route('home');
	}

	/**
	 * [updateInfoCare description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function updateInfoCare(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Thongtinkham::$rules
		);
	
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$thoigiankham = $request->input('date').' '.substr($request->input('time'), 0, 5).':00';
		Thongtinkham::find($request->input('thongtinkham_id'))->update([
			'phongkham_id' => $request->input('phongkham_id'),
			'thoigiankham' => $thoigiankham
		]);

		return redirect()->route('home');
	}

	/**
	 * Create info care.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function createInfoCare(Request $request) {
		
		$validator = Validator::make(
		    $request->all(),
		    Thongtinkham::$rules
		);
	
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$thoigiankham = $request->input('date').' '.substr($request->input('time'), 0, 5).':00';
		$userId = Auth::user()->get()->id;

		Thongtinkham::create([
			'phongkham_id' => $request->input('phongkham_id'),
			'thoigiankham' => $thoigiankham,
			'benhnhan_id' => $userId
		]);

		return redirect()->route('home');
	}

	private function convertDateAndTimeToSql($date, $time) {
		$month = substr($date, 0, 2);
		$day = substr($date, 3, 2);
		$year = substr($date, 6, 4);
		$hour = substr($time, 0, 2);
		$minute = substr($time, 3, 2);
		$result = $year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':00';
		return $result;
	}
	/**
	 * Registe info care.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function registerInfoCare(Request $request) {

		$validator = Validator::make(
		    $request->all(),
		    Benhnhan::$rules + Thongtinkham::$rules
		);	
	
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		
		$password = bcrypt($request->input('password'));

		$benhnhan = Benhnhan::create([
			'hoten' => $request->input('hoten'),
			'username' => $request->input('username'),
			'ngaysinh' => $request->input('diachi')." 00:00:00",
			'CMND' => $request->input('CMND'),
			'gioitinh' => $request->input('gioitinh'),
			'diachi' => $request->input('diachi'),
			'sodienthoai' => $request->input('sodienthoai'),
			'email' => $request->input('email'),
			'password' => $password
		]);

		$thoigiankham = $this->convertDateAndTimeToSql($request->input('date'), $request->input('time'));
		
		Thongtinkham::create([
			'benhnhan_id' => $benhnhan->id,
			'phongkham_id' => $request->input('phongkham_id'),
			'thoigiankham' => $thoigiankham
		]);
		
		if (Auth::user()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('home');
        }
	}

	/**
	 * Delete info care.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function deleteInfoCare(Request $request) {
		Thongtinkham::find($request->input('thongtinkham_id'))->destroy();
		return response()->json(['status' => '200']);
	}

	/**
	 * [submitYkienNguoiDung description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function submitYkienNguoiDung(Request $request) {
		$data = $request->all();
		Ykienphanhoi::create([
			'hoten' => $data['last_name'].' '.$data['first_name'],
			'email' => $data['email'],
			'ykien' => $data['ykien'],
			'benhvien_id' => $data['benhvien_id'],
		]);
	}

	/**
	 * [getRoomFromService description]
	 * @return [type] [description]
	 */
	public function getRoomFromService() {
		$idService = Input::get('idService');
		$typeShow = Input::get('type');
		$phongkhamId = Input::get('phongkham_id');
		$view = null;
		$phongkhams = DB::table('phongkham')->where('dichvu_id', $idService)->get();
		if ($typeShow == 'select') {
			$view = view('mainpage.item-phongkham-select')->with('phongkhams', $phongkhams)->with('phongkhamId', $phongkhamId);
		} else {
			$view = view('mainpage.item-phongkham')->with('phongkhams', $phongkhams);
		}
		return $view;
	}

	/**
	 * Search ajax hoptial.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function searchHopital(Request $request) {
	    $textSearch = $request->input('textSearch');
	    $benhviens = DB::table('benhvien')->where('ten', 'like','%'.$textSearch.'%')->get();
	    $view = view('mainpage.result-search-hopital')->with('benhviens', $benhviens);
	    return $view;
	}
}
