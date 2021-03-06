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
class HopitalController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}


    public function getHopitals() {
    	$urlPost = action('HopitalController@postCreateHopital');
    	$benhviens = Benhvien::all();
        return view('admin.inforhopital', compact('urlPost','benhviens'));
    }

	/**
	 * Post data to create room.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postCreateHopital(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Benhvien::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$fileName = '';
		if ($request->hasFile('hinhanh')) {
			$destinationPath = public_path().'/uploads/';
			$extension = $request->file('hinhanh')->getClientOriginalExtension();
			$fileName = str_random(40).'.'.$extension;
			$request->file('hinhanh')->move($destinationPath, $fileName);
		}

		$data = $request->all();
		$data['hinhanh'] = $fileName;

		Benhvien::create($data);

		return redirect(action('HopitalController@getHopitals'));
	}

	/**
	 * Show view edit hopital.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getEditHopital($id) {
		$urlPost = action('HopitalController@postEditHopital', $id);
	    $benhvien = Benhvien::find($id);
	    $benhviens = Benhvien::all();
	    return view('admin.inforhopital', compact('benhvien', 'urlPost', 'benhviens'));
	}

	/**
	  * Post and update data hopital.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postEditHopital(Request $request, $id) {

	    $validator = Validator::make(
		    $request->all(),
		    Benhvien::$rulesEdit
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$fileName = '';
		$data = $request->all();

		if ($request->hasFile('hinhanh')) {
			$destinationPath = public_path().'/uploads/';
			$extension = $request->file('hinhanh')->getClientOriginalExtension();
			$fileName = str_random(40).'.'.$extension;
			$request->file('hinhanh')->move($destinationPath, $fileName);
			$data['hinhanh'] = $fileName;
		} else {
			$data['hinhanh'] = $request->input('hinhanh_hidden');	
		}

		Benhvien::find($id)->update($data);
		
		return redirect(action('HopitalController@getEditHopital', $id));
	  }

	/**
	  * Destroy room.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postDestroyHopital(Request $request, $id) {
	    Benhvien::destroy($id);
	    return response()->json(['status' => 200]);
	  }
}
