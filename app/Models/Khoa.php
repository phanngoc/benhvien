<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model {

    protected $table = 'khoa';
    protected $fillable = ['benhvien_id', 'tenkhoa', 'hinhanh', 'thongtin'];
    public static $rules = [
        'tenkhoa' => 'required',
        'thongtin' => 'required',
        'hinhanh' => 'required',
        'benhvien_id' => 'required',
    ];
    public static $rulesEdit = [
        'tenkhoa' => 'required',
        'thongtin' => 'required',
        'benhvien_id' => 'required',
    ];
}
