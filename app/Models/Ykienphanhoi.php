<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ykienphanhoi extends Model {

    protected $table = 'ykienphanhoi';
    protected $fillable = ['benhvien_id', 'hoten', 'email', 'ykien', 'status'];



}
