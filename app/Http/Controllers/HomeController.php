<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use Illuminate\Http\Request;

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
	public function index()
	{
		$benhviens = Benhvien::all();
		return view('home', compact('benhviens'));
	}

	public function submitYkienNguoiDung(Request $request) {
		$data = $request->all();
		Ykienphanhoi::create([
			'hoten' => $data['last_name'].' '.$data['first_name'],
			'email' => $data['email'],
			'ykien' => $data['ykien'],
		]);
	}

}
