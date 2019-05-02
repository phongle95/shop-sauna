<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenSP','tomTat','keyword','gia','img','img1','img2','img3','productDetail','maLoai',
    ];

    public function loaisanpham()
    {
        return $this->belongsTo('App\loaisanpham', 'id');
    }
}
