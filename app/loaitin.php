<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenLoaiTin',
    ];

    public function news()
    {
        return $this->belongsTo('App\news', 'maLoaiTin');
    }
}
