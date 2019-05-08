@extends('trangchu.menu.master') @section('noidung')

        <main class="main">
            <div class="home-slider-container">
                <div class="home-slider owl-carousel owl-theme owl-theme-light">
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy" data-src="sauna/assets/images/slider/sauna1.jpg"></div>
                        <!-- End .slide-bg -->
                        <div class="container">
                            <div class="home-slide-content">
                                <h3>Giảm Giá 10% Xông Hơi</h3>
                                <h1>Vinass Sauna</h1>
                                <a href="category.html" class="btn btn-primary">Chi Tiết</a>

                            </div>
                            <!-- End .home-slide-content -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide">
                        <div class="slide-bg owl-lazy" data-src="sauna/assets/images/slider/sauna2.jpg"></div>
                        <!-- End .slide-bg -->
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-8 col-md-6 text-center slide-content-right">
                                    <div class="home-slide-content">
                                        <h3>Giảm Giá 10% Xông Hơi</h3>
                                        <h1>Vinass Sauna</h1>
                                        <a href="category.html" class="btn btn-primary">Chi Tiết</a>
                                    </div>
                                    <!-- End .home-slide-content -->
                                </div>
                                <!-- End .col-lg-5 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .home-slide -->
                </div>
                <!-- End .home-slider -->
            </div>
            <!-- End .home-slider-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>MIỂN PHÍ VẬN CHUYỂN</h4>
                            <p>Giao hành an toàn nhanh chóng</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>ĐÚNG GIÁ TRÊN THỊ TRƯỜNG</h4>
                            <p>100% Hàng chính hãng</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>HỔ TRỢ 24/7</h4>
                            <p>Phục vụ tận tình chu đáo</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .info-boxes-container -->

            <div class="banners-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km2.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km1.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="sauna/assets/images/banners/km3.jpg" alt="máy xông hơi">
                                </a>
                            </div>
                            <!-- End .banner -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .banneers-group -->

            <div class="featured-products-section carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">Máy Xông Hơi Ướt</h2>

                    <div class="featured-products owl-carousel owl-theme">
                        @foreach ($sanpham as $item)

                        <div class="product">
                            <figure class="product-image-container">

                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image1">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi ướt">
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
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a  href="{{ route('trangchu.pages.them',$item->id) }}" class="paction add-cart" title="Thêm vào giỏ">
                                        <span>Thêm Vào Giỏ</span>
                                    </a>

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
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
            <!-- End .featured-proucts-section -->

            <div class="mb-5"></div>
            <!-- margin -->

            <div class="carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">Máy Xông Hơi Khô</h2>

                    <div class="new-products owl-carousel owl-theme">
                        @foreach ($sanpham1 as $item)

                        <div class="product">
                            <figure class="product-image-container">
                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image2">
                                    <img src="upload/{{ $item->img }}" alt="máy xông hơi khô">
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

                                    <a href="{{ route('trangchu.pages.them',$item->id) }}" class="paction add-cart" title="Thêm vào giỏ">
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
                    <!-- End .news-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .carousel-section -->
            <div class="mb-5"></div>
            <!-- margin -->

            <div class="carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">Phòng Xông hơi Khô Sauna</h2>

                    <div class="new-products owl-carousel owl-theme">
                            @foreach ($sanpham2 as $item)

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image2">
                                        <img src="upload/{{ $item->img }}" alt="phòng xông hơi khô">
                                    </a>

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

                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-cart" title="Thêm vào giỏ">
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
                    <!-- End .news-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .carousel-section -->
            <div class="mb-5"></div>
            <!-- margin -->

            <div class="carousel-section">
                <div class="container">
                    <h2 class="h3 title mb-4 text-center">Phòng Xông hơi hồng ngoại</h2>

                    <div class="new-products owl-carousel owl-theme">
                            @foreach ($sanpham3 as $item)

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image2">
                                        <img src="upload/{{ $item->img }}" alt="máy xông hơi khô">
                                    </a>
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

                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-cart" title="Thêm vào giỏ">
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
                    <!-- End .news-proucts -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .carousel-section -->

            <div class="mb-5"></div>
            <!-- margin -->

            <div class="info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>

                                <div class="feature-box-content">
                                    <h3>Hổ Trợ khách hàng<span>Need Assistence?</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>

                                <div class="feature-box-content">
                                    <h3>Thanh Toán Online <span>Safe & Fast</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.consectetur adipiscing elit. </p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>

                                <div class="feature-box-content">
                                    <h3>Mua Hàng <span>Easy & Free</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .info-section -->

            <div class="promo-section" style="background-image: url(sauna/assets/images/sauna4.jpg)">
                <div class="container">
                    <h3>hàng chính hãng không lo về giá </h3>
                    <a href="{{ route('trangchu.pages.sanpham') }}" class="btn btn-dark">Sản Phẩm</a>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .promo-section -->

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">

                        <a class="partner">
                            <img src="sauna/assets/images/logos/1.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/2.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/3.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/4.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/5.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/6.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/7.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/8.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/9.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/10.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/11.jpg" alt="logo">
                        </a>
                        <a class="partner">
                            <img src="sauna/assets/images/logos/12.jpg" alt="logo">
                        </a>
                    </div>
                    <!-- End .partners-carousel -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .partners-container -->

            <div class="blog-section">
                <div class="container">
                    <h2 class="h3 title text-center">Tin Tức</h2>

                    <div class="blog-carousel owl-carousel owl-theme">
                        @foreach ($tintuc as $item)

                        <article class="entry">
                            <div class="entry-media">
                                <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                                    <img style="width:100%;height: 210px;" src="upload/{{ $item->img }}" alt="tin tức xông hơi">
                                </a>
                                <div class="entry-date">{{ date("d", strtotime($item->date)) }}<span>{{ date("m", strtotime($item->date)) }}</span></div>
                                <!-- End .entry-date -->
                            </div>
                            <!-- End .entry-media -->

                            <div class="entry-body">
                                <h3 class="entry-title">
                                    <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                                </h3>
                                <div class="entry-content">
                                    <p>{{ $item->tomTat }}</p>

                                    <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}" class="btn btn-dark">Đọc Thêm</a>
                                </div>
                                <!-- End .entry-content -->
                            </div>
                            <!-- End .entry-body -->
                        </article>
                        <!-- End .entry -->
                        @endforeach



                    </div>
                    <!-- End .blog-carousel -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .blog-section -->
        </main>
        <!-- End .main -->

@endsection @section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="" />
<meta name="description" content='' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content="travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content="travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.trangchu') }}" /> @endsection
