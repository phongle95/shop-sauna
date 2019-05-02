<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = 'loaisanpham';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenLoaiSanPham',
    ];

    public function sanpham()
    {
        return $this->belongsTo('App\sanpham', 'maLoai');
    }
}
