<?php namespace App\Http\Controllers;

use App\Models\Ykienphanhoi;
use App\Models\Benhvien;
use App\Models\Loaidichvu;
use App\Models\Phongkham;
use App\Models\Khoa;
use App\Models\Loaitin;
use App\Models\Tintuc;
use App\Models\Thongtinkham;
use Illuminate\Http\Request;
use DB;
use Validator;
use File;
class RoomController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}


    public function getRooms() {
	   $rooms = Phongkham::with(['dichvu','dichvu.benhvien'])->get();
	   foreach ($rooms as $key => $value) {
	   	 $countpatient = DB::table('thongtinkham')->select(DB::raw('count(*) as countpatient'))->where('phongkham_id', $value->id)
	   	 		->first()->countpatient;
	   	 $rooms[$key]->countpatient = $countpatient;
	   }
       return view('admin.list-room', compact('rooms'));
    }

	public function getCreateRoom() {
    	$dichvus = Loaidichvu::all();
		return view('admin.create-room', compact('dichvus'));
	}

	/**
	 * Post data to create room.
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postCreateRoom(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Phongkham::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Phongkham::create([
	      	'ten' => $request->input('ten'),
	      	'bacsi' => $request->input('bacsi'),
	      	'dichvu_id' => $request->input('dichvu_id')
		]);
		
		return redirect(action('RoomController@getRooms'));
	}

	public function getEditRoom($id) {
	    $room = Phongkham::find($id);
	    $dichvus = Loaidichvu::all();
	    return view('admin.edit_room', compact('room', 'dichvus'));
	}

	/**
	  * [postEditNew description]
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	 
	public function postEditRoom(Request $request, $id) {
	    $validator = Validator::make(
		    $request->all(),
		    Phongkham::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		Phongkham::find($id)->update([
	      	'ten' => $request->input('ten'),
	      	'bacsi' => $request->input('bacsi'),
	      	'dichvu_id' => $request->input('dichvu_id')
		]);
		
		return redirect(action('RoomController@getRooms'));
	  }

	/**
	  * Destroy room.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postDestroyRoom(Request $request, $id) {
	    Phongkham::destroy($id);
	    Thongtinkham::where('phongkham_id', $id)->delete();
	    return response()->json(['status' => 200]);
	  }
}
