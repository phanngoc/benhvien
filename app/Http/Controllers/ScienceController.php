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
use File;
class ScienceController extends BaseController {

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


	public function getScience() {
		$khoas = Khoa::all();
		$benhvien = Benhvien::all();
		$urlPost = action('ScienceController@postCreateScience');
    	return view('admin.science', compact('khoas', 'benhvien', 'urlPost'));
	}

	public function postCreateScience(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Khoa::$rules
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		$fileName = '';
		if ($request->hasFile('hinhanh')) {
			$destinationPath = public_path().'/uploads/';
			$fileName = str_random(40);
			$request->file('hinhanh')->move($destinationPath, $fileName);
		}
	    $user = $this->getInfoUser();
		Khoa::create([
	        'tenkhoa' => $request->input('tenkhoa'),
	        'thongtin' => $request->input('thongtin'),
	        'hinhanh' => $fileName,
			'benhvien_id' => $request->input('benhvien_id')
		]);
		return redirect(action('ScienceController@getScience'));
	}

    public function getEditScience($id) {
    	$khoas = Khoa::all();
      	$khoa = Khoa::find($id);
      	$benhvien = Benhvien::all();
      	$urlPost = action('ScienceController@postEditScience', $id);
      	return view('admin.science', compact('benhvien', 'khoa', 'urlPost', 'khoas'));
    }

	  /**
	   * [postEditNew description]
	   * @param  Request $request [description]
	   * @return [type]           [description]
	   */
	  public function postEditScience(Request $request, $id) {
	    $validator = Validator::make(
		    $request->all(),
		    Khoa::$rulesEdit
		);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		$fileName = '';
		if ($request->hasFile('hinhanh')) {
			$destinationPath = public_path().'/uploads/';
			$fileName = str_random(40);
			$request->file('hinhanh')->move($destinationPath, $fileName);
		}
	    $user = $this->getInfoUser();
		Khoa::find($id)->update([
	        'tenkhoa' => $request->input('tenkhoa'),
	        'thongtin' => $request->input('thongtin'),
	        'hinhanh' => $fileName,
			'benhvien_id' => $request->input('benhvien_id')
		]);
		return redirect(action('ScienceController@getEditScience', $id));
	  }

  /**
   * Destroy new.
   * @param  Request $request [description]
   * @return [type]           [description]
   */
  public function getDestroyScience(Request $request) {
    $tintuc = Tintuc::find($request->input('id'));
    $pathFileThumb = public_path().'/uploads/'.$tintuc->thumbnail;
    if (File::exists($pathFileThumb))
    {
        File::delete($pathFileThumb);
    }
    Tintuc::destroy($request->input('id'));
    return redirect(action('NewController@getNews'));
  }
}
