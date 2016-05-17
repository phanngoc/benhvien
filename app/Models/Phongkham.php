<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phongkham extends Model {

    protected $table = 'phongkham';
    protected $fillable = ['dichvu_id', 'ten', 'bacsi'];

    public static $rules = [
    	'ten' => 'required',
    	'bacsi' => 'required',
    	'dichvu_id' => 'required'
    ];

    /**
     * Many to One
     * @return [type] [description]
     */
    public function dichvu() {
    	return $this->belongsTo('App\Models\Loaidichvu', 'dichvu_id', 'id');
    }

    /**
     * Has many relation
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function thongtinkham() {
        return $this->hasMany('App\Model\Thongtinkham', 'phongkham_id', 'id');
    }
}
