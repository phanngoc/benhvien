<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use App\Models\Loaitin;
use App\Models\Tintuc;
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



  public function getScience() {
    return view('admin.science');
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

	public function getCreatRoom() {
		return view('admin.create_new_room');
	}

	public function getEditRoom() {
		return view('admin.edit_room');
	}


	public function getInRoom() {
		return view('admin.patient-in-room');
	}

	public function getPatientInfo() {
		return view('admin.patient-info');
	}

	public function getMedicalExameInfo() {
		return view('admin.medical-exame-info');
	}

	public function getIdea() {
		return view('admin.idea');
	}
}
