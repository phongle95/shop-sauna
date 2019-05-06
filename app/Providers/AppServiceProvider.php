<?php

namespace App\Providers;
use App\news;
use App\loaisanpham;
use App\items;
use App\sanpham;
use App\loaitin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loaisanpham = loaisanpham::all();
        view::share('loaisanpham',$loaisanpham);

        $mathang = items::all();
        view::share('mathang',$mathang);

        $sidebar = news::orderBy('id','DESC')->offset(1)->limit(3)->get();
        view::share('sidebar',$sidebar);

        $tag = loaitin::all();
        view::share('tag',$tag);

        $product = sanpham::where('maLoaiSanPham',1)->orderBy('id','DESC')->limit(3)->get();
        view::share('product',$product);
        $product1 = sanpham::where('maLoaiSanPham',2)->orderBy('id','DESC')->limit(3)->get();
        view::share('product1',$product1);
    }
}
