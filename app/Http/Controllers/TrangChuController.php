<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\loaitin;
use App\loaisanpham;
use App\sanpham;
use Storage;
use Mail;
use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{
    //trang chủ
    public function trangchu(){
        $sanpham = sanpham::where('maLoaiSanPham',1)->orderBy('id','DESC')->limit(5)->get();
        $sanpham1 = sanpham::where('maLoaiSanPham',2)->orderBy('id','DESC')->limit(4)->get();
        $sanpham2 = sanpham::where('maLoaiSanPham',3)->orderBy('id','DESC')->limit(4)->get();
        $sanpham3 = sanpham::where('maLoaiSanPham',4)->orderBy('id','DESC')->limit(4)->get();
        $tintuc = news::orderBy('id','DESC')->limit(4)->get();
        return view('trangchu.pages.trangchu',['sanpham'=>$sanpham,'sanpham1'=>$sanpham1,'sanpham2'=>$sanpham2,'sanpham3'=>$sanpham3,'tintuc'=>$tintuc]);
    }

    //Giới thiệu
    public function gioithieu(){
        return view('trangchu.pages.gioithieu');
    }

    //Sản phẩm
    public function sanpham(){
        $sanpham = sanpham::orderBy('id','DESC')->paginate(2);
        return view('trangchu.pages.sanpham',['sanpham'=>$sanpham]);
    }


    public function detailNew(){
        return view('trangchu.pages.detail-new');
    }

    // tin tức
    public function tintuc(){
        $tin = news::where('maLoaiTin',4)->orderBy('id','DESC')->paginate(4);
        return view('trangchu.pages.tintuc',['tin'=>$tin]);
    }



    // công trình
    public function congtrinh(){
        $tin = news::where('maLoaiTin',1)->orderBy('id','DESC')->paginate(4);
        return view('trangchu.pages.congtrinh',['tin'=>$tin]);
    }

    // tuyển dụng
    public function tuyendung(){
        $tin = news::where('maLoaiTin',3)->orderBy('id','DESC')->paginate(4);
        return view('trangchu.pages.tuyendung',['tin'=>$tin]);
    }

    //liên hệ
    public function lienhe(){
        return view('trangchu.pages.lienhe');
    }


    // danh sach san pham
    public function listProduct($slug,$id){
        $sanpham = sanpham::where('maLoaiSanPham',$id)->orderBy('id','DESC')->limit(4)->get();
        return view('trangchu.pages.listproduct',['sanpham'=>$sanpham]);
    }


    public function chiTietNews($slug ,$id,$ma){

        $chitiet = news::find($id);
        $news = news::where('maLoaiTin',$ma)->orderBy('id','DESC')->limit(4)->get();
        return view('trangchu.chitiet.news',['chitiet'=>$chitiet,'news'=>$news]);
    }

    public function productDetail($name ,$id,$ma){

        $chitiet = sanpham::find($id);
        $sanpham = sanpham::where('maLoaiSanPham',$ma)->orderBy('id','DESC')->limit(4)->get();
        return view('trangchu.chitiet.product',['chitiet'=>$chitiet,'sanpham'=>$sanpham]);
    }


    // public function loaiTin($slug,$id){
    //     // dd($slug);
    //     $tin = news::where('maLoaiTin',$id)->orderBy('id','DESC')->paginate(4);
    //     return view('trangchu.pages.loaitin',['tin'=>$tin]);
    // }



    // //liên hệ send email
    // public function sendEmail(Request $request){
    //     $input = $request->all();
    //     Mail::send('mailfb',array('name'=>$input["name"],'email'=>$input["email"],'sdt'=>$input["sdt"],'comment'=>$input["comment"]),function($message){
    //         $message->to('lehongphongcntt@gmail.com','Visitor')->subject('Khách Hàng Liên Hệ!');
    //     });
    //     return redirect()->route('trangchu.pages.lienhe')->with('thongbao','Liên hệ thành công');
    // }

    //  //trang chủ gởi email
    //  public function goiEmail(Request $request){
    //     $input = $request->all();
    //     Mail::send('mailfb',array('name'=>$input["name"],'email'=>$input["email"],'sdt'=>$input["sdt"],'comment'=>$input["comment"]),function($message){
    //         $message->to('lehongphongcntt@gmail.com','Visitor')->subject('Khách Hàng Liên Hệ!');
    //     });
    //     return redirect()->route('trangchu.pages.trangchu')->with('thongbao','Đặt tour thành công');
    // }

    //tìm kiếm
    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = news::where('tieuDe','like','%'.$tukhoa.'%')->orwhere('tomTat','like','%'.$tukhoa.'%')->paginate(4);
        return view('trangchu.timkiem.news',['ketqua'=>$ketqua]);
    }


    // public function tauSupper(){
    //     return view('trangchu.pages.taulyson');
    // }

    // public function maybay(){
    //     return view('trangchu.pages.maybay');
    // }
}
