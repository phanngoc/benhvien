<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phongkham extends Model {

    protected $table = 'phongkham';
    protected $fillable = ['benhvien_id', 'ten', 'bacsi'];

    /**
     * Many to One
     * @return [type] [description]
     */
    public function dichvu() {
    	return $this->belongsTo('App\Models\Loaidichvu', 'dichvu_id', 'id');
    }
}
