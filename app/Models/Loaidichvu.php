<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaidichvu extends Model {

    protected $table = 'loaidichvu';
    protected $fillable = ['benhvien_id', 'tendichvu', 'giatien'];


}
