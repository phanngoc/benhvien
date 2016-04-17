<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaidichvu extends Model {

    protected $table = 'loaidichvu';
    protected $fillable = ['benhvien_id', 'tendichvu', 'giatien'];

    /**
     * Many to One
     * @return [type] [description]
     */
    public function benhvien() {
    	return $this->belongsTo('App\Models\Benhvien', 'benhvien_id', 'id');
    }
}
