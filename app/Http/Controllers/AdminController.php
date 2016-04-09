<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use App\Models\Loaitin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller {

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
		$loaitin = DB::table('loaitin')->join('benhvien','benhvien.id','=','loaitin.benhvien_id')->select('loaitin.id','loaitin.name as tentin','benhvien.ten as tenbenhvien')->get();
    return view('admin.category-news', compact('loaitin'));
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
			$destinationPath = public_path().'uploads/';
			$fileName = str_random(40);
			Request::file('photo')->move($destinationPath, $fileName);
		}
		Loaitin::create([
			 'name' => $request->input('name'),
			 'benhvien_id' => $request->input('benhvien_id'),
			 'icon' => $fileName
			]);
		return redirect(action('AdminController@getCategoryNews'));
	}

  public function getNews() {
    return view('admin.news');
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

	public function getRooms() {
		return view('admin.list-room');
	}

	public function getInRoom() {
		return view('admin.patient-in-room');
	}

	public function getPatientInfo() {
		return view('admin.patient-info');
	}

	public function getIdea() {
		return view('admin.idea');
	}
}
