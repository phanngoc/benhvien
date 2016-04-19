<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benhvien extends Model {

    protected $table = 'benhvien';
    protected $fillable = ['ten', 'diachi', 'hinhanh', 'sodienthoai', 'email', 'thongtin', 'macode'];
    public static $rules = [
        'ten' => 'required',
        'diachi' => 'required',
        'sodienthoai' => 'required',
        'email' => 'required',
        'thongtin' => 'required'
    ];

}
