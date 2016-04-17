<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ykienphanhoi extends Model {

    protected $table = 'ykienphanhoi';
    protected $fillable = ['benhvien_id', 'hoten', 'email', 'ykien', 'status'];

    public static $rules = [
        'hoten' => 'required',
        'email' => 'required',
        'ykien' => 'required',
    ];
    /**
     * Many to One
     * @return [type] [description]
     */
    public function benhvien() {
    	return $this->belongsTo('App\Models\Benhvien', 'benhvien_id', 'id');
    }

}
