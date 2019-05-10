<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\sanpham;
class SiteMapController extends Controller
{
    public function sitemap(){
        $news = news::all();
        $sanpham = sanpham::all();
         return response()->view('trangchu.menu.sitemap', [
            'news' => $news,
            'sanpham' => $sanpham,

      ])->header('Content-Type', 'text/xml');
    }
}
