<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model {

    protected $table = 'tintuc';
    protected $fillable = ['author_id', 'category_id', 'tieude', 'noidung','thumbnail'];
    public static $rules = [
        'tieude' => 'required',
        'noidung' => 'required',
        'thumbnail' => 'required',
        'category_id' => 'required',
    ];
    public static $rulesEdit = [
        'tieude' => 'required',
        'noidung' => 'required',
        'category_id' => 'required',
    ];

    /**
     * [admin description]
     * @return [type] [description]
     */
    public function admin() {
        return $this->belongsTo('App\Models\Admin','author_id','id');
    }
}
