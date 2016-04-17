<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thongtinkham extends Model {

    protected $table = 'thongtinkham';
    protected $fillable = ['benhnhan_id', 'phongkham_id', 'thoigiankham', 'dakham'];

    public static $rules = [
        'phongkham_id' => 'required',
        'date' => 'required',
        'time' => 'required'
    ];

    /**
     * Many to One
     * @return [type] [description]
     */
    public function benhnhan() {
    	return $this->belongsTo('App\Models\Benhnhan', 'benhnhan_id', 'id');
    }

    /**
     * Many to One
     * @return [type] [description]
     */
    public function phongkham() {
    	return $this->belongsTo('App\Models\Phongkham', 'phongkham_id', 'id');
    }
}
