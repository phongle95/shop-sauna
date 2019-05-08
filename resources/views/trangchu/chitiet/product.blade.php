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
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div>
                                    <!-- End .product-single-qty -->

                                    <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div>
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
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
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
@endsection
@section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content= "travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content= "travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.lienhe') }}"/>
@endsection
