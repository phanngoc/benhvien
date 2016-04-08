<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use Illuminate\Http\Request;
use DB;
use Input;
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
	public function index($id = 1)
	{
		$loaidichvus = Loaidichvu::where('benhvien_id', $id)->get();
		$benhviens = Benhvien::all();
		$phongkhams = DB::table('phongkham')->leftJoin('loaidichvu', 'phongkham.dichvu_id', '=', 'loaidichvu.id')
				->leftJoin('benhvien','benhvien.id','=','loaidichvu.benhvien_id')->where('benhvien.id', $id)->select('phongkham.id','phongkham.ten','phongkham.bacsi')->get();

		$khoas = Khoa::where('benhvien_id', $id)->get();
		$ykienphanhoi = Ykienphanhoi::where('status',1)->get();
		$idBenhvien = $id;
		return view('home', compact('benhviens', 'loaidichvus', 'phongkhams', 'khoas', 'idBenhvien', 'ykienphanhoi'));
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
		$phongkhams = DB::table('phongkham')->where('dichvu_id', $idService)->get();
		$view = view('mainpage.item-phongkham')->with('phongkhams', $phongkhams);
		return $view;
	}
}
