<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\loaitin;
use App\loaisanpham;
use App\sanpham;
use Storage;
use Mail;
use Cookie;
use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{
    //trang chủ
    public function trangchu(Request $request){

        $sanpham = sanpham::where('maLoaiSanPham',1)->orderBy('id','DESC')->limit(5)->get();
        $sanpham1 = sanpham::where('maLoaiSanPham',2)->orderBy('id','DESC')->limit(4)->get();
        $sanpham2 = sanpham::where('maLoaiSanPham',3)->orderBy('id','DESC')->limit(4)->get();
        $sanpham3 = sanpham::where('maLoaiSanPham',4)->orderBy('id','DESC')->limit(4)->get();
        $sanpham4 = sanpham::where('maLoaiSanPham',50)->orderBy('id','DESC')->limit(4)->get();
        $tintuc = news::orderBy('id','DESC')->limit(4)->get();
        return view('trangchu.pages.trangchu',['sanpham'=>$sanpham,'sanpham1'=>$sanpham1,'sanpham2'=>$sanpham2,'sanpham3'=>$sanpham3,'sanpham4'=>$sanpham4,'tintuc'=>$tintuc]);
    }

    //Giới thiệu
    public function gioithieu(){
        return view('trangchu.pages.gioithieu');
    }

    //Sản phẩm
    public function sanpham(){
        $sanpham = sanpham::orderBy('id','DESC')->paginate(14);
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
        $sanpham = sanpham::where('maLoaiSanPham',$id)->orderBy('id','DESC')->paginate(8);
        return view('trangchu.pages.listproduct',['sanpham'=>$sanpham]);
    }

    // danh sach mat hang
    public function matHang($name,$id){
        $data = sanpham::where('maSanPham',$id)->orderBy('id','DESC')->paginate(8);
        return view('trangchu.pages.mathang',['data'=>$data]);
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

    //tìm kiếm tin tức
    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = news::where('tieuDe','like','%'.$tukhoa.'%')->orwhere('tomTat','like','%'.$tukhoa.'%')->paginate(4);
        if(count($ketqua)>0){
            toastr()->success("Đã tìm thấy kết quả $tukhoa");
        }
        else {
            toastr()->error("Không tìm thấy kết quả cho $tukhoa");
        }
        return view('trangchu.timkiem.news',['ketqua'=>$ketqua]);
    }

      //tìm kiếm sản phẩm
      public function searchProduct(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = sanpham::where('tenSP','like','%'.$tukhoa.'%')->paginate(8);
        if(count($ketqua)>0){
            toastr()->success("Đã tìm thấy kết quả $tukhoa");
        }
        else {
            toastr()->error("Không tìm thấy kết quả cho $tukhoa");
        }
        return view('trangchu.timkiem.product',['ketqua'=>$ketqua]);
    }

     // gởi email đặt hàng
     public function goiEmail(Request $request){
        $input = $request->all();
        Mail::send('mailfb',array('name'=>$input["name"],'sdt'=>$input["sdt"],'email'=>$input["email"],'diachi'=>$input["diachi"]),function($message){
            $message->to('lehongphongcntt@gmail.com','abc')->subject('Khách Đặt Hàng!');
        });
        return redirect()->route('trangchu.pages.thanhcong');

    }



    public function cart(){

        return view('trangchu.pages.cart');
    }

    public function checkout(){

        return view('trangchu.pages.checkout');
    }

    public function thanhcong(){

        return view('trangchu.pages.thanhcong');
    }




}
