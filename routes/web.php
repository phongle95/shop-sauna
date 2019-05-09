<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// //trang chủ
Route::get('',['uses'=>'TrangChuController@trangchu','as'=>'trangchu.pages.trangchu']);

// //giới thiệu
Route::get('gioi-thieu',['uses'=>'TrangChuController@gioithieu','as'=>'trangchu.pages.gioithieu']);

// sản phẩm
Route::get('san-pham',['uses'=>'TrangChuController@sanpham','as'=>'trangchu.pages.sanpham']);

// //tin tức
Route::get('tin-tuc',['uses'=>'TrangChuController@tintuc','as'=>'trangchu.pages.tintuc']);

// công trình
Route::get('cong-trinh',['uses'=>'TrangChuController@congtrinh','as'=>'trangchu.pages.congtrinh']);

// công trình
Route::get('tuyen-dung',['uses'=>'TrangChuController@tuyendung','as'=>'trangchu.pages.tuyendung']);


// //liên hệ
Route::get('lien-he',['uses'=>'TrangChuController@lienhe','as'=>'trangchu.pages.lienhe']);

//tim kiếm tin tức
Route::get('tim-kiem',['uses'=>'TrangChuController@timkiem','as'=>'trangchu.timkiem.news']);

//tim kiếm sản phẩm
Route::get('tim-kiem-san-pham',['uses'=>'TrangChuController@searchProduct','as'=>'trangchu.timkiem.product']);

Route::get('tin-tuc-{slug}_{id}_{ma}.html', [
    'uses' => 'TrangChuController@chiTietNews',
    'as' => 'trangchu.chitiet.news'
]);


// Route::get('{slug}_{id}', [
//     'uses' => 'TrangChuController@loaiTin',
//     'as' => 'trangchu.pages.loaitin'
// ]);

// danh sách sản phẩm
Route::get('{slug}.{id}.html', [
    'uses' => 'TrangChuController@listProduct',
    'as' => 'trangchu.pages.listproduct'
]);

// danh sách mặt hàng
Route::get('san-pham-{name}={id}.html', [
    'uses' => 'TrangChuController@matHang',
    'as' => 'trangchu.pages.mathang'
]);

Route::get('san-pham-{name}_{id}_{ma}.html', [
    'uses' => 'TrangChuController@productDetail',
    'as' => 'trangchu.chitiet.product'
]);


// Route::get('sitemap.xml', [
//     'uses' => 'SiteMapController@sitemap',
//     'as' => 'trangchu.menu.sitemap'
// ]);



// Route::post('send', [
//     'uses' => 'TrangChuController@sendEmail',
//     'as' => 'front.fb'
// ]);


// Route::post('email', [
//     'uses' => 'TrangChuController@goiEmail',
//     'as' => 'front.email'
// ]);

// danh sách giỏ hàng
Route::get('gio-hang', [
    'uses' => 'TrangChuController@cart',
    'as' => 'trangchu.pages.cart'
]);

// đặt hàng
Route::get('dat-hang', [
    'uses' => 'TrangChuController@checkout',
    'as' => 'trangchu.pages.checkout'
]);

// thành công
Route::get('thanh-cong', [
    'uses' => 'TrangChuController@thanhcong',
    'as' => 'trangchu.pages.thanhcong'
]);


// thêm sản phẩm giỏ hàng
Route::get('them-san-pham,{id}', [
    'uses' => 'TrangChuController@addCart',
    'as' => 'trangchu.pages.them'
]);


Route::post('ajax/addcart', [
    'uses' => 'AjaxController@addcart',
    'as' => 'ajax.index.addcart'
]);



//                                 // Admin
// // ==========================================================================


Route::get('login', [
    'uses' => 'AdminController@login',
    'as' => 'admin.login.login'
]);

Route::post('login', [
    'uses' => 'AdminController@postLogin',
    'as' => 'admin.login.login'
]);

Route::get('logout', [
    'uses' => 'AdminController@logout',
    'as' => 'admin.logout'
]);



Route::prefix('sauna-admin')->middleware('auth')->group(function() {

    //admin
    Route::get('', [
        'uses' => 'AdminController@admin',
        'as' => 'admin.trangchu'
    ]);

    //danh sách loại sản phẩm
    Route::group(['prefix' => 'loai-san-pham'], function() {

        Route::get('danh-sach', [
            'uses' => 'AdminController@getLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@xoaLoaiSanPham',
            'as' => 'admin.pages.loaisanpham.xoa'
        ]);

    });


    //danh sách loại mặt hàng
    Route::group(['prefix' => 'loai-mat-hang'], function() {

        Route::get('danh-sach', [
            'uses' => 'AdminController@danhSachMatHang',
            'as' => 'admin.pages.items.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@themMatHang',
            'as' => 'admin.pages.items.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemMatHang',
            'as' => 'admin.pages.items.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaMatHang',
            'as' => 'admin.pages.items.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaMatHang',
            'as' => 'admin.pages.items.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@xoaMatHang',
            'as' => 'admin.pages.items.xoa'
        ]);

    });

    Route::group(['prefix' => 'san-pham'], function() {

        Route::get('danh-sach', [
            'uses' => 'AdminController@danhSachSanPham',
            'as' => 'admin.pages.sanpham.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@themSanPham',
            'as' => 'admin.pages.sanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemSanPham',
            'as' => 'admin.pages.sanpham.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaSanPham',
            'as' => 'admin.pages.sanpham.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaSanPham',
            'as' => 'admin.pages.sanpham.sua'
        ]);


        Route::get('xoa/{id}', [
            'uses' => 'AdminController@xoaSanPham',
            'as' => 'admin.pages.sanpham.xoa'
        ]);

    });

    //danh sách loại tin
    Route::group(['prefix' => 'loai-tin'], function() {

        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachLoai',
            'as' => 'admin.pages.loaitin.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemLoai',
            'as' => 'admin.pages.loaitin.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemLoai',
            'as' => 'admin.pages.loaitin.them'
        ]);


        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaLoai',
            'as' => 'admin.pages.loaitin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaLoai',
            'as' => 'admin.pages.loaitin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaLoai',
            'as' => 'admin.pages.loaitin.xoa'
        ]);
    });

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('danh-sach', [
            'uses' => 'AdminController@getDanhSachTin',
            'as' => 'admin.pages.tin.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'AdminController@getThemTin',
            'as' => 'admin.pages.tin.them'
        ]);

        Route::post('them', [
            'uses' => 'AdminController@postThemTin',
            'as' => 'admin.pages.tin.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'AdminController@getSuaTin',
            'as' => 'admin.pages.tin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'AdminController@postSuaTin',
            'as' => 'admin.pages.tin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'AdminController@getXoaTin',
            'as' => 'admin.pages.tin.xoa'
        ]);
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('mathang/{idmathang}','AjaxController@getMatHang');

    });




});









// Route::get('database', function() {
//     Schema::create('table', function ($table) {
//         $table->increments('id');
//         $table->string('loaiXe',100);
//         $table->string('soCho',100);
//         $table->int('giaTien');

//     });
//     echo "da tao xong";
// });
