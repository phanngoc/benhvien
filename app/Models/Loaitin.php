<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model {

    protected $table = 'loaitin';
    protected $fillable = ['benhvien_id', 'name', 'icon'];


}
