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
use Auth;

class NewController extends BaseController {

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


    public function getNews() {
	    $news = DB::table('tintuc')->join('loaitin','loaitin.id','=','tintuc.category_id')->select('tintuc.*','loaitin.name as nameloaitin')->get();
        return view('admin.news', compact('news'));
    }

	public function getCreateNew() {
    	$loaitin = DB::table('loaitin')->join('benhvien','loaitin.benhvien_id','=','benhvien.id')->get();
		return view('admin.create-new', compact('loaitin'));
	}

	/**
	 * [postCreateNew description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function postCreateNew(Request $request) {
		
		$validator = Validator::make(
		    $request->all(),
		    Tintuc::$rules
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$fileName = '';
		if ($request->hasFile('thumbnail')) {
			$destinationPath = public_path().'/uploads/';
			$fileName = str_random(40);
			$request->file('thumbnail')->move($destinationPath, $fileName);
		}

    	$user = Auth::admin()->get();
		Tintuc::create([
	       'tieude' => $request->input('tieude'),
	       'noidung' => $request->input('noidung'),
	       'category_id' => $request->input('category_id'),
			'thumbnail' => $fileName,
	       'author_id' => $user->id,
		]);

		return redirect(action('NewController@getNews'));
	}

	/**
	 * Show page edit news.
	 * @param  [int] $id [description]
	 * @return [View]     [description]
	 */
	public function getEditNew($id) {
	    $new = Tintuc::find($id);
	    $loaitin = DB::table('loaitin')->join('benhvien','loaitin.benhvien_id','=','benhvien.id')->get();
	    return view('admin.news.edit-new', compact('loaitin', 'new'));
	}

	/**
	  * Save data update news.
	  * @param  Request $request [description]
	  * @return [type]           [description]
	  */
	public function postEditNew(Request $request) {
		$validator = Validator::make(
		    $request->all(),
		    Tintuc::$rulesEdit
		);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}

		$fileName = '';
		if ($request->hasFile('thumbnail')) {
			$destinationPath = public_path().'/uploads/';
			$fileName = str_random(40);
			$request->file('thumbnail')->move($destinationPath, $fileName);
		}

		$user = Auth::admin()->get();
		Tintuc::find($request->input('id'))->update([
		   'tieude' => $request->input('tieude'),
		   'noidung' => $request->input('noidung'),
		   'category_id' => $request->input('category_id'),
		   'thumbnail' => $fileName,
		   'author_id' => $user->id,
		   'id' => $request->input('id'),
		]);
		return redirect(action('NewController@getNews'));
	}

	/**
	* Destroy new.
	* @param  Request $request [description]
	* @return [type]           [description]
	*/
	public function getDestroyNew(Request $request) {
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
