<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use App\Models\Loaitin;
use App\Models\Tintuc;
use App\Models\Thongtinkham;
use App\Models\Benhnhan;
use App\Models\Admin;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;

class AdminController extends BaseController {

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

    public function getInfoUser() {
		$dataSample['id'] = 1;
	    $dataSample['username'] = "Phan Ngoc";
	    $dataSample['password'] = "Phann123@123";
	    return $dataSample;
    }
    
    /**
     * [showLogin description]
     * @return [type] [description]
     */
    public function showLogin() {

    	if (Auth::admin()->check()) {
    		return redirect()->route('admin.profile');
    	}
    	return view('admin.login');
    }

    /**
     * Process login admin.
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postLoginAdmin(Request $request) {
    	
    	$validator = Validator::make(
		    $request->all(),
		    [
				'email' => 'required',
				'password' => 'required',
			]
		);

		if ($validator->fails()) {

			return redirect()->back()->withErrors($validator->errors());
		}

		$isSuccess = Auth::admin()->attempt(array(
	        'email'     => $request->input('email'),
	        'password'  => $request->input('password'),
	    ));

	    if ($isSuccess) {
	    	return redirect()->route('admin.profile');
	    } else {
	    	return redirect()->back();
	    }
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
    	$user = Auth::admin()->get();
		return view('admin.profile', compact('user'));
	}

	/**
	 * Update profile admin.
	 * @return [type] [description]
	 */
	public function updateProfile(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    [
				'hoten' => 'required',
				'email' => 'required',
				'password' => 'required',
				'username' => 'required',
			]
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Auth::admin()->get()->update([
			'hoten' => $request->input('hoten'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			'hoten' => $request->input('hoten')
		]);
		return redirect()->route('admin.profile');
	}

	/**
	 * [getCategoryNews description]
	 * @return [type] [description]
	 */
	public function getCategoryNews() {
		$benhvien = Benhvien::all();
		$loaitin = DB::table('loaitin')->join('benhvien','benhvien.id','=','loaitin.benhvien_id')->select('loaitin.id','loaitin.name as tentin','benhvien.ten as tenbenhvien','loaitin.icon')->get();
		return view('admin.category-news', compact('loaitin', 'benhvien'));
	}

	/**
	 * [postCategoryNews description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postCategoryNews(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    [
					'benhvien_id' => 'required',
					'name' => 'required',
					'icon' => 'required',
				]
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		$fileName = '';
		if ($request->hasFile('icon')) {
			$destinationPath = public_path().'/uploads/';
			$extension = $request->file('icon')->getClientOriginalExtension();
			$fileName = str_random(40).'.'.$extension;
			$request->file('icon')->move($destinationPath, $fileName);
		}
		Loaitin::create([
			 'name' => $request->input('name'),
			 'benhvien_id' => $request->input('benhvien_id'),
			 'icon' => $fileName
			]);
		return redirect(action('AdminController@getCategoryNews'));
	}

	/**
	 * [getEditCategoryNews description]
	 * @param  [type] $idCategoryNew [description]
	 * @return [type]                [description]
	 */
	public function getEditCategoryNews($idCategoryNew) {
		$categoryNew = Loaitin::find($idCategoryNew);
		$benhvien = Benhvien::all();
		$loaitin = DB::table('loaitin')->join('benhvien','benhvien.id','=','loaitin.benhvien_id')->select('loaitin.id','loaitin.name as tentin','benhvien.ten as tenbenhvien')->get();
		return view('admin.category-news-edit', compact('loaitin', 'benhvien','categoryNew'));
	}

	/**
	 * [postEditCategoryNews description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postEditCategoryNews(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    [
				'benhvien_id' => 'required',
				'name' => 'required',
			]
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		$fileName = '';
		if ($request->hasFile('icon')) {
			$destinationPath = public_path().'/uploads/';
			$extension = $request->file('icon')->getClientOriginalExtension();
			$fileName = str_random(40).'.'.$extension;
			$request->file('icon')->move($destinationPath, $fileName);
		}
		Loaitin::find($request->input('id'))->update([
			 'name' => $request->input('name'),
			 'benhvien_id' => $request->input('benhvien_id'),
			 'icon' => $fileName
			]);
		return redirect(action('AdminController@getCategoryNews'));
	}

	/**
	 * [postDestroyCategoryNew description]
	 * @param  Request $request [description]
	 * @param  [type]  $id      [description]
	 * @return [type]           [description]
	 */
	public function postDestroyCategoryNew(Request $request, $id) {
		Loaitin::destroy($id);
		return response()->json(['status' => 200]);
	}

	/**
	 * [getPatientInfo description]
	 * @return [type] [description]
	 */
	public function getPatientInfo() {
		$benhnhans = Benhnhan::all();
		return view('admin.patient-info', compact('benhnhans'));
	}

	/**
	 * Delete patient.
	 * @param  Request $request [description]
	 * @param  [type]  $id      [description]
	 * @return [type]           [description]
	 */
	public function postDestroyPatient(Request $request, $id) {
		Benhnhan::destroy($id);
		return response()->json(['status' => 200]);
	}

	/**
	 * Show list info take care.
	 * @return [type] [description]
	 */
	public function getMedicalExameInfo() {
		$thongtinkhams = Thongtinkham::with(['benhnhan','phongkham','phongkham.dichvu','phongkham.dichvu.benhvien'])->get();
		return view('admin.medical-exame-info', compact('thongtinkhams'));
	}

	/**
	 * [updateStatusTakeMedical description]
	 * @return [type] [description]
	 */
	public function updateStatusTakeMedical(Request $request) {
		$data = $request->data;
		foreach ($data as $key => $value) {
			Thongtinkham::find($value['thongtinkhamId'])->update([
				'dakham' => $value['dakham']
			]);
		}
		return response()->json(['status' => '200']);
	}

	/**
	 * Show list idea
	 * @return [type] [description]
	 */
	public function getIdea() {
		$ykienphanhois = Ykienphanhoi::with('benhvien')->get();
		return view('admin.idea', compact('ykienphanhois'));
	}

	/**
	 * Show edit idea
	 * @return [type] [description]
	 */
	public function getEditIdea(Request $request, $id) {
		$ykienphanhoi = Ykienphanhoi::find($id);
		return view('admin.edit-idea', compact('ykienphanhoi'));
	}

	/**
	 * [updateIdea description]
	 * @param  Request $request [description]
	 * @param  [type]  $id      [description]
	 * @return [type]           [description]
	 */
	public function postUpdateIdea(Request $request, $id) {
		$validator = Validator::make(
		    $request->all(),
		    Ykienphanhoi::$rules
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Ykienphanhoi::find($id)->update([
			'hoten' => $request->input('hoten'),
			'email' => $request->input('email'),
			'ykien' => $request->input('ykien'),
			'status' => ($request->input('status') == 'on') ? 1 : 0,
		]);
		return redirect(action('AdminController@getIdea'));
	}

	/**
	 * [postDestroyIdea description]
	 * @param  Request $request [description]
	 * @param  [type]  $id      [description]
	 * @return [type]           [description]
	 */
	public function postDestroyIdea(Request $request, $id) {
		Ykienphanhoi::destroy($id);
		return response()->json(['status' => '200']);
	}
}
