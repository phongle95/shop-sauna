<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenMatHang', 'maLoaiSanPham',
    ];
}
