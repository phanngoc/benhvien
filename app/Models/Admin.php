<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model{

    protected $table = 'admin';
    
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
