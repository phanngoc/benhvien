<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phongkham extends Model {

    protected $table = 'phongkham';
    protected $fillable = ['benhvien_id', 'ten', 'bacsi'];

}
