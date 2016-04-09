<?php namespace App\Http\Controllers;

class BaseController extends Controller {
    /**
     * [getInfoUser description]
     * @return [type] [description]
     */
    public function getInfoUser() {
      $userAny = new \stdClass;
  		$userAny->id = 1;
      $userAny->username = "Phan Ngoc";
      $userAny->password = "Phann123@123";
      return $userAny;
    }
}
