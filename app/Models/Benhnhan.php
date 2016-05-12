<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Benhnhan extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

    protected $table = 'benhnhan';
    protected $fillable = ['hoten', 'username', 'password', 'ngaysinh', 'diachi', 'CMND', 'gioitinh',
    	'sodienthoai', 'email', 'code'
    ];

    public static $rules = [
        'hoten' => 'required',
        'ngaysinh' => 'required',
        'diachi' => 'required',
        'CMND' => 'required',
        'gioitinh' => 'required',
        'sodienthoai' => 'required',
        'email' => 'required'
    ];
    
    public static $rulesEdit = [
        'tieude' => 'required',
        'noidung' => 'required',
        'category_id' => 'required',
    ];
}
