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

class KindServiceController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}


    public function getKindServices() {
    	$urlPost = action('KindServiceController@postCreateKindService');
    	$benhviens = Benhvien::all();
    	$loaidichvus = Loaidichvu::with('benhvien')->get();
        return view('admin.kind-service', compact('urlPost', 'benhviens', 'loaidichvus'));
    }

	/**
	 * Post data to create room.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postCreateKindService(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Loaidichvu::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Loaidichvu::create($request->all());
		return redirect(action('KindServiceController@getKindServices'));
	}

	/**
	 * Show view edit hopital.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getEditKindService($id) {
		$urlPost = action('KindServiceController@postEditKindService', $id);
	    $loaidichvu = Loaidichvu::find($id);
	    $loaidichvus = Loaidichvu::all();
	    $benhviens = Benhvien::all();
	    return view('admin.kind-service', compact('loaidichvu', 'urlPost', 'benhviens', 'loaidichvus'));
	}

	/**
	  * Post and update data hopital.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postEditKindService(Request $request, $id) {
	    $validator = Validator::make(
		    $request->all(),
		    Loaidichvu::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Loaidichvu::find($id)->update($request->all());
		
		return redirect(action('KindServiceController@getKindServices'));
	  }

	/**
	  * Destroy room.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postDestroyKindService(Request $request, $id) {
	    Loaidichvu::destroy($id);
	    return response()->json(['status' => 200]);
	  }
}
