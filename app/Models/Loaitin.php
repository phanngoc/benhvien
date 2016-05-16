<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model {

    protected $table = 'loaitin';
    protected $fillable = ['benhvien_id', 'name', 'icon', 'description'];

    /**
     * Many to One
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function benhvien() {
        return $this->belongsTo('App\Models\Benhvien', 'benhvien_id', 'id');
    }

}
