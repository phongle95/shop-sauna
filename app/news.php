<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tieuDe','tomTat','keyword','img','date','noiDung','maLoaiTin',
    ];

    public function loaitin()
    {
        return $this->belongsTo('App\loaitin', 'id');
    }
}
