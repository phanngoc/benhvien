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
use Illuminate\Http\Request;
use DB;
use Validator;

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
    $user = $this->getInfoUser();
		return view('admin.profile');
	}

  public function getCategoryNews() {
	$benhvien = Benhvien::all();
	$loaitin = DB::table('loaitin')->join('benhvien','benhvien.id','=','loaitin.benhvien_id')->select('loaitin.id','loaitin.name as tentin','benhvien.ten as tenbenhvien','loaitin.icon')->get();
	return view('admin.category-news', compact('loaitin', 'benhvien'));
  }

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

	public function getEditCategoryNews($idCategoryNew) {
		$categoryNew = Loaitin::find($idCategoryNew);
		$benhvien = Benhvien::all();
		$loaitin = DB::table('loaitin')->join('benhvien','benhvien.id','=','loaitin.benhvien_id')->select('loaitin.id','loaitin.name as tentin','benhvien.ten as tenbenhvien')->get();
		return view('admin.category-news-edit', compact('loaitin', 'benhvien','categoryNew'));
	}

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


  public function getInforHopitals() {
    return view('admin.inforhopital');
  }

  public function getHopital() {
    return view('admin.hopital');
  }

  public function getKindService() {
    return view('admin.kind-service');
  }

  public function getCreatInforScience() {
    return view('admin.creat-infor-science');
  }

   public function getEditInforScience() {
    return view('admin.edit_infor_science');
  }

	public function getRooms() {
		return view('admin.list-room');
	}

	public function getCreateRoom() {
		return view('admin.create_new_room');
	}

	public function getEditRoom() {
		return view('admin.edit_room');
	}


	public function getInRoom() {
		return view('admin.patient-in-room');
	}

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
