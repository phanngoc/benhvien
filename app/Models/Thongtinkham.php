<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thongtinkham extends Model {

    protected $table = 'thongtinkham';
    protected $fillable = ['benhnhan_id', 'phongkham_id', 'thoigiankham'];

    public static $rules = [
        'phongkham_id' => 'required',
        'date' => 'required',
        'time' => 'required'
    ];
}
