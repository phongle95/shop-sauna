<?php

namespace App\Http\Controllers;
use App\items;
use App\loaisanpham;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getMatHang($idmathang){
        $mathang = items::where('maLoaiSanPham',$idmathang)->get();
        foreach ($mathang as $mh) {
            echo " <option value='".$mh->id."'> ".$mh->tenMatHang." </option>";
        }
    }
}
