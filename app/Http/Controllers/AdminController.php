<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
use App\news;
use App\items;
use App\loaisanpham;
use App\sanpham;
use App\Http\Requests\TinRequest;
use App\Http\Requests\TinSuaRequest;
use App\Http\Requests\SanPhamRequest;
use App\Http\Requests\SanPhamSuaRequest;
use Illuminate\Support\Facades\Auth;
use Storage;

class AdminController extends Controller
{
    // trang chủ admin
    public function admin(){
        return view('admin.trangchu');
    }

    // get danh sách loại sản phẩm
    public function getLoaiSanPham(){

        $loaisanpham = loaisanpham::all();
        return view('admin.pages.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]);
    }

    // get thêm loại sản phẩm
    public function getThemLoaiSanPham(){

        return view('admin.pages.loaisanpham.them');
    }

    // post thêm loại sản phẩm
    public function postThemLoaiSanPham(Request $request){
        $loaisanpham  = new loaisanpham;
        $loaisanpham->tenLoaiSanPham = $request->tenLoaiSanPham;
        $loaisanpham->save();
        return redirect(route('admin.pages.loaisanpham.danhsach'))->with('thongbao','Thêm thành công');
    }

    // get sửa loại sản phẩm
    public function getSuaLoaiSanPham($id){
        $loaisanpham = loaisanpham::find($id);
        return view('admin.pages.loaisanpham.sua',['loaisanpham'=>$loaisanpham]);
    }

    // post sửa loại sản phẩm
    public function postSuaLoaiSanPham(Request $request,$id){
        $loaisanpham = loaisanpham::find($id);
        $loaisanpham->tenLoaiSanPham = $request->tenLoaiSanPham;
        $loaisanpham->save();
        return redirect(route('admin.pages.loaisanpham.danhsach'))->with('thongbao','Sửa thành công');
    }

    // xóa loại sản phẩm
    public function xoaLoaiSanPham($id){
        $loaisanpham = loaisanpham::find($id);
        $loaisanpham->delete();
        return redirect(route('admin.pages.loaisanpham.danhsach'))->with('xoa','Xóa thành công');
    }

    // danh sách loại mặt hàng
    public function danhSachMatHang(){
        $mathang = items::all();
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.items.danhsach',['mathang'=>$mathang,'loaisanpham'=>$loaisanpham]);
    }

    // get thêm mặt hàng
    public function themMatHang(){
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.items.them',['loaisanpham'=>$loaisanpham]);
    }

    // post thêm mặt hàng
    public function postThemMatHang(Request $request){
        $mathang  = new items;
        $mathang->tenMatHang = $request->tenMatHang;
        $mathang->maLoaiSanPham = $request->maLoaiSanPham;
        $mathang->save();
        return redirect(route('admin.pages.items.danhsach'))->with('thongbao','Thêm thành công');
    }

    // get sửa mặt hàng
    public function getSuaMatHang($id){
        $mathang = items::find($id);
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.items.sua',['mathang'=>$mathang,'loaisanpham'=>$loaisanpham]);
    }

    // post sửa mặt hàng
    public function postSuaMatHang(Request $request,$id){
        $mathang = items::find($id);
        $mathang->tenMatHang = $request->tenMatHang;
        $mathang->maLoaiSanPham = $request->maLoaiSanPham;
        $mathang->save();
        return redirect(route('admin.pages.items.danhsach'))->with('thongbao','Sửa thành công');
    }

    // xóa mặt hàng
    public function xoaMatHang($id){
        $mathang = items::find($id);
        $mathang->delete();
        return redirect(route('admin.pages.items.danhsach'))->with('xoa','Xóa thành công');
    }

    // danh sách sản phẩm
    public function danhSachSanPham(){
        $loaisanpham = loaisanpham::all();
        $mathang = items::all();
        $sanpham = sanpham::orderBy('id','DESC')->get();
        return view('admin.pages.sanpham.danhsach',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham,'mathang'=>$mathang]);
    }

    // get thêm sản phẩm
    public function themSanPham(){
        $mathang = items::all();
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.sanpham.them',['mathang'=>$mathang,'loaisanpham'=>$loaisanpham]);
    }

    // post thêm sản phẩm
    public function postThemSanPham(SanPhamRequest $request){
        $sanpham = new sanpham;
        $sanpham->tenSP = $request->tenSP;
        $sanpham->tomTat = $request->tomTat;
        $sanpham->keyword = $request->keyword;
        $sanpham->gia = $request->gia;
        $sanpham->productDetail = $request->productDetail;
        $sanpham->maLoaiSanPham = $request->maLoaiSanPham;
        $sanpham->maSanPham = $request->maSanPham;

        $file = $request->file('img');


        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $sanpham->img=$img;
        }
        else{
            $sanpham->img="defau.png";
        }

        $file1 = $request->file('img1');


        if ($file1 !="") {
            $img1 = $file1->store("/", ['disk'=>'upload']);
            $sanpham->img1=$img1;
        }
        else{
            $sanpham->img1="defau.png";
        }
        $file2 = $request->file('img2');


        if ($file2 !="") {
            $img2 = $file2->store("/", ['disk'=>'upload']);
            $sanpham->img2=$img2;
        }
        else{
            $sanpham->img2="defau.png";
        }
        $file3 = $request->file('img3');


        if ($file3 !="") {
            $img3 = $file3->store("/", ['disk'=>'upload']);
            $sanpham->img3=$img3;
        }
        else{
            $sanpham->img3="defau.png";
        }


        $sanpham->save();
        return redirect(route('admin.pages.sanpham.danhsach'))->with('thongbao','Thêm thành công');
    }

    // get sửa sản phẩm
    public function getSuaSanPham($id){
        $sanpham = sanpham::find($id);
        $mathang = items::all();
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.sanpham.sua',['sanpham'=>$sanpham,'mathang'=>$mathang,'loaisanpham'=>$loaisanpham]);
    }

    // post sửa sản phẩm
    public function postSuaSanPham(SanPhamSuaRequest $request,$id){
        $sanpham = sanpham::find($id);
        $sanpham->tenSP = $request->tenSP;
        $sanpham->tomTat = $request->tomTat;
        $sanpham->keyword = $request->keyword;
        $sanpham->gia = $request->gia;
        $sanpham->productDetail = $request->productDetail;
        $sanpham->maLoaiSanPham = $request->maLoaiSanPham;
        $sanpham->maSanPham = $request->maSanPham;

        $file = $request->file('img');


        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$sanpham->img);
            $sanpham->img=$img;
        }


        $file1 = $request->file('img1');


        if ($file1 !="") {
            $img1 = $file1->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$sanpham->img1);
            $sanpham->img1=$img1;
        }

        $file2 = $request->file('img2');


        if ($file2 !="") {
            $img2 = $file2->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$sanpham->img2);
            $sanpham->img2=$img2;
        }

        $file3 = $request->file('img3');


        if ($file3 !="") {
            $img3 = $file3->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$sanpham->img3);
            $sanpham->img3=$img3;
        }

        $sanpham->save();
        return redirect(route('admin.pages.sanpham.danhsach'))->with('thongbao','Sửa thành công');
    }

    // xóa sản phẩm
    public function xoaSanPham($id){
        $sanpham = sanpham::find($id);
        unlink(public_path()."/upload/".$sanpham->img);
        unlink(public_path()."/upload/".$sanpham->img1);
        unlink(public_path()."/upload/".$sanpham->img2);
        unlink(public_path()."/upload/".$sanpham->img3);
        $sanpham->delete();
        return redirect(route('admin.pages.sanpham.danhsach'))->with('xoa','Xóa thành công');
    }

    //danh sách loại tin
    public function getDanhSachLoai(){
        $loaitin = loaitin::all();
        return view('admin.pages.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    public function getThemLoai(){
        return view('admin.pages.loaitin.them');
    }

    public function postThemLoai(Request $request){
        $loaitin  = new loaitin;
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaLoai($id){
        $loaitin = loaitin::find($id);

        return view('admin.pages.loaitin.sua',['loaitin'=>$loaitin]);
    }

    public function postSuaLoai(Request $request,$id){
        $loaitin = loaitin::find($id);
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaLoai($id){
        $loaitin = loaitin::find($id);
        $loaitin->delete();
        return redirect(route('admin.pages.loaitin.danhsach'))->with('xoa','Xóa thành công');
    }

    // tin tức
    public function getDanhSachTin(){
        $tin = news::orderBy('id','DESC')->get();
        $loaitin = loaitin::all();
        return view('admin.pages.tin.danhsach',['tin'=>$tin,'loaitin'=>$loaitin]);
    }

    public function getThemTin(){
        $loaitin = loaitin::all();
        return view('admin.pages.tin.them',['loaitin'=>$loaitin]);
    }

    public function postThemTin(TinRequest $request){

        $tin = new news;
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');


        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $tin->img=$img;
        }
        else{
            $tin->img="defau.png";
        }


        $tin->save();
        return redirect(route('admin.pages.tin.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaTin($id){
        $loaitin = loaitin::all();
        $tin = news::find($id);
        return view('admin.pages.tin.sua',['tin'=>$tin,'loaitin'=>$loaitin]);
    }

    public function postSuaTin(TinSuaRequest $request,$id){
        $tin = news::find($id);
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');
        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$tin->img);
            $tin->img=$img;
        }
        $tin->save();
        return redirect(route('admin.pages.tin.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaTin($id){
        $tin = news::find($id);
        unlink(public_path()."/upload/".$tin->img);
        $tin->delete();
        return redirect(route('admin.pages.tin.danhsach'))->with('xoa','Xóa thành công');
    }


    public function login(){
        return view('admin.login.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt(['username' =>$request->username, 'password' =>$request->password])) {
            $value = $request->session()->put('username',$request->username);
            return redirect(route('admin.trangchu'));

        }
        else {

            return redirect(route('admin.login.login'))->with('thongbao','Tên tài khoản hặc mật khẩu không chính sác mời nhập lại');
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login.login');
    }
}
