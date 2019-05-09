@extends('trangchu.menu.master')
@section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 product-single-gallery">
                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="upload/{{ $chitiet->img }}" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="upload/{{ $chitiet->img1 }}" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="upload/{{ $chitiet->img2 }}" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="upload/{{ $chitiet->img3 }}"/>
                                    </div>
                                </div>

                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="upload/{{ $chitiet->img }}" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="upload/{{ $chitiet->img2 }}" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="upload/{{ $chitiet->img2 }}" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="upload/{{ $chitiet->img3 }}" />
                                </div>
                            </div>
                        </div>
                        <!-- End .col-lg-7 -->

                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">{{ $chitiet->tenSP }}</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->


                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span style="color:red;" class="product-price">Giá : {{ number_format($chitiet->gia) }} vnđ</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{ $chitiet->tomTat }}</p>
                                </div>
                                <!-- End .product-desc -->


                                <div class="product-action product-all-icons">
                                    <div class="product-single-qty">
                                        <input id="cart" class="horizontal-quantity form-control" type="text">
                                    </div>
                                    <!-- End .product-single-qty -->

                                    <a href="" onClick="thayDoi({{ $chitiet }})" class="paction add-cart" title="Add to Cart">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                </div>

                                <script>
                                    //  function addCart(item){
                                    //     // kiem tra so luong co chua
                                    //     if(item.soLuong === undefined || item.soLuong === null){
                                    //         item.soLuong = 1;
                                    //     }

                                    //     var value = JSON.stringify(item);
                                    //     console.log('truoc',value,item.id)
                                    //     if(getCookie(item.id)===""){
                                    //         // chua ton tai thi them vao gio hang
                                    //         setCookie(item.id, value, 1);
                                    //     } else {
                                    //         // cap nhat so luong
                                    //         var oldItem = JSON.parse(getCookie(item.id));
                                    //         item.soLuong += oldItem.soLuong;

                                    //         // xoa thang cu
                                    //         deleteCookie(item.id);

                                    //         // them thang moi
                                    //         value = JSON.stringify(item);
                                    //         setCookie(item.id, value, 1);
                                    //     }
                                    //     console.log('sau',getCookie(item.id));
                                    // }

                                    function thayDoi(data){

                                        var sl = document.getElementById("cart").value;
                                        var chitiet = {
                                            id: data.id,
                                            img: data.img,
                                            tenSP: data.tenSP,
                                            gia: data.gia,
                                            soLuong: data.soLuong
                                        };

                                        // kiem tra so luong co chua
                                        if(chitiet.soLuong === undefined || chitiet.soLuong === null){
                                            chitiet.soLuong = 1;
                                        }
                                        var value = JSON.stringify(chitiet);


                                        console.log('truoc',value,chitiet.soLuong)
                                        if(getCookie(chitiet.id)===""){
                                            // chua ton tai thi them vao gio hang
                                            setCookie(chitiet.id, value, 1);
                                        } else {
                                            // cap nhat so luong
                                            var oldItem = JSON.parse(getCookie(chitiet.id));
                                            chitiet.soLuong = Number(Number(oldItem.soLuong)+Number(sl));

                                            // xoa thang cu
                                            deleteCookie(chitiet.id);

                                            // them thang moi
                                            value = JSON.stringify(chitiet);
                                            setCookie(chitiet.id, value, 1);
                                        }
                                        console.log('sau',value,chitiet.soLuong)
                                    }


                                    function deleteCookie(cname) {
                                        document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                                    }

                                    function setCookie(cname,cvalue,exdays) {
                                      var d = new Date();
                                      d.setTime(d.getTime() + (exdays*24*60*60*1000));
                                      var expires = "expires=" + d.toGMTString();
                                      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                                    }

                                    function getCookie(cname) {
                                      var name = cname + "=";
                                      var decodedCookie = decodeURIComponent(document.cookie);
                                      console.log('decodedCookie',decodedCookie);

                                      var ca = decodedCookie.split(";");
                                      for(var i = 0; i < ca.length; i++) {
                                        var c = ca[i];
                                        while (c.charAt(0) == ' ') {
                                          c = c.substring(1);
                                        }
                                        if (c.indexOf(name) == 0) {
                                          return c.substring(name.length, c.length);
                                        }
                                      }
                                      return "";
                                    }

                                    function checkCookie() {
                                      var user=getCookie("username");
                                      if (user != "") {
                                        alert("Welcome again " + user);
                                      } else {
                                         user = prompt("Please enter your name:","");
                                         if (user != "" && user != null) {
                                           setCookie("username", user, 30);
                                         }
                                      }
                                    }

                                </script>
                                <!-- End .product-action -->

                                <div class="product-single-share">
                                    <label>Share:</label>
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                                <!-- End .product single-share -->
                            </div>
                            <!-- End .product-single-details -->
                        </div>
                        <!-- End .col-lg-5 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Mô Tả Sản Phẩm</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                    {!! $chitiet->productDetail !!}
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->


                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
            <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">
                    <div class="widget widget-brand">
                        <a href="{{ route('trangchu.pages.trangchu') }}">
                            <img src="sauna/assets/images/logovinass.png" alt="logo">
                        </a>
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-info">
                        <ul>
                            <li>
                                <i class="icon-shipping"></i>
                                <h4>GIAO HÀNG <br> FREE</h4>
                            </li>
                            <li>
                                <i class="icon-us-dollar"></i>
                                <h4>HOÀN TIỀN 100%<br>NẾU HÀNG GIẢ</h4>
                            </li>
                            <li>
                                <i class="icon-online-support"></i>
                                <h4>ONLINE<br>HỔ TRỢ 24/7</h4>
                            </li>
                        </ul>
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-banner">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="sauna/assets/images/banners/khuyenmai.jpg" alt="hình khuyến mãi">
                            </a>
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-featured">
                        <h3 class="widget-title">Sản Phẩm Bán Chạy</h3>

                        <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        @foreach ($product as $item)

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image">
                                                    <img style="height:70px" src="upload/{{ $item->img }}" alt="máy xông hơi">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span>
                                                        <!-- End .ratings -->
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span style="color:red" class="product-price">{{ number_format($item->gia) }} vnđ</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <!-- End .product -->
                                        @endforeach


                                    </div>
                                    <!-- End .featured-col -->

                                    <div class="featured-col">
                                            @foreach ($product1 as $item)

                                            <div class="product product-sm">
                                                <figure class="product-image-container">
                                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image">
                                                        <img style="height:70px" src="upload/{{ $item->img }}" alt="máy xông hơi">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <!-- End .ratings -->
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span style="color:red" class="product-price">{{ number_format($item->gia) }} vnđ</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <!-- End .product -->
                                            @endforeach


                                    </div>
                                    <!-- End .featured-col -->
                                </div>
                                <!-- End .widget-featured-slider -->
                            </div>
                            <!-- End .widget-body -->
                    </div>
                    <!-- End .widget -->
                </div>
            </aside>
            <!-- End .col-md-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">Sản Phẩm Liên Quan </h2>

            <div class="featured-products owl-carousel owl-theme owl-dots-top">
                @foreach ($sanpham as $item)

                <div class="product">
                    <figure class="product-image-container">

                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                            <img src="upload/{{ $item->img }}" alt="máy xông hơi">
                        </a>
                        <span class="product-label label-sale">-20%</span>
                        <span class="product-label label-hot">New</span>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                <span>Chi tiết</span>
                            </a>

                            <a  onclick="addCart1({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                <span>Chi tiết</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->
                @endforeach


            </div>
            <!-- End .featured-proucts -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .featured-section -->
</main>
<!-- End .main -->
@endsection @section('meta')
<title>{{ $chitiet->tenSP }}</title>
<meta name="keywords" content="{{ $chitiet->keyword }}" />
<meta name="description" content='{{ $chitiet->tomTat }}' />
<!--meta facebook-->
<meta property="og:title" content="{{ $chitiet->tieuDe }}" />
<meta property="og:description" content="{{ $chitiet->tomTat }}" />
<meta property="og:image" content="upload/{{ $chitiet->img }}" />
<!--meta google-->
<meta itemprop="name" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta itemprop="description" content="{{ $chitiet->tomTat }}" />
<meta itemprop="image" content="upload/{{ $chitiet->img }}" />
<meta name="og:url" content="{{ route('trangchu.chitiet.product',['name'=>str_slug($chitiet->tenSP),'id'=>$chitiet->id,'ma'=>$chitiet->maLoaiSanPham]) }}" />
 @endsection



<script>
    function getDataCart(){
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            if(ca[i].indexOf('soLuong')>0){
                var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                console.log('item',item);
            }
        }
    }

    function addCart1(data){
        var item = {
            id: data.id,
            img: data.img,
            tenSP: data.tenSP,
            gia: data.gia,
            soLuong: data.soLuong
        };

        // kiem tra so luong co chua
        if(item.soLuong === undefined || item.soLuong === null){
            item.soLuong = 1;
        }

        var value = JSON.stringify(item);
        console.log('truoc',value,item.id)
        console.log('co chua',getCookie(item.id));
        if(getCookie(item.id)===""){
            console.log('phong');
            // chua ton tai thi them vao gio hang
            setCookie(item.id, value, 1);

        } else {
            // cap nhat so luong
            console.log('cap nhap',getCookie(item.id));

            var oldItem = JSON.parse(getCookie(item.id));
            item.soLuong += oldItem.soLuong;

            // xoa thang cu
            deleteCookie(item.id);

            // them thang moi
            value = JSON.stringify(item);
            setCookie(item.id, value, 1);
        }
        console.log('sau',getCookie(item.id));
    }

    function deleteCookie(cname) {
        document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      console.log('decodedCookie',decodedCookie);

      var ca = decodedCookie.split(";");
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie() {
      var user=getCookie("username");
      if (user != "") {
        alert("Welcome again " + user);
      } else {
         user = prompt("Please enter your name:","");
         if (user != "" && user != null) {
           setCookie("username", user, 30);
         }
      }
    }
</script>
