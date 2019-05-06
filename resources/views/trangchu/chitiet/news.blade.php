@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <br>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="">Tin Tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="entry single">
                        <div class="entry-media">
                            <div class="entry-slider owl-carousel owl-theme owl-theme-light">
                                <img src="upload/{{ $chitiet->img }}" alt="máy xông hơi">

                            </div><!-- End .entry-slider -->
                        </div><!-- End .entry-media -->
                        <div class="fb-like" data-href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($chitiet->tieuDe),'id'=>$chitiet->id,'ma'=>$chitiet->maLoaiTin]) }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        <br>  <br>
                        <div class="entry-body">
                            <div class="entry-date">
                                <span class="day">{{ date("d", strtotime($chitiet->date)) }}</span>
                                <span class="month">Jun</span>
                            </div><!-- End .entry-date -->

                            <h2 class="entry-title">
                                    {{ $chitiet->tieuDe }}
                            </h2>

                            <div class="entry-meta">
                                <span><i class="icon-calendar"></i>{{ date("d-m-Y", strtotime($chitiet->date)) }}</span>
                                <span><i class="icon-user"></i>By <a>Phong Lê</a></span>

                            </div><!-- End .entry-meta -->

                            <div class="entry-content">
                                    {!! $chitiet->noiDung !!}
                            </div><!-- End .entry-content -->

                            <div class="entry-share">

                                </div><!-- End .entry-share -->
                                <div class="fb-comments" data-href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($chitiet->tieuDe),'id'=>$chitiet->id,'ma'=>$chitiet->maLoaiTin]) }}" data-numposts="5"></div>


                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <div class="related-posts">
                        <h4 class="light-title"><strong>Tin Liên Quan</strong></h4>

                        <div class="owl-carousel owl-theme related-posts-carousel">
                            @foreach ($news as $item)

                            <article class="entry">
                                <div class="entry-media">
                                    <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                                        <img src="upload/{{ $item->img }}" alt="Máy Xông Hơi">
                                    </a>
                                </div><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-date">
                                        <span class="day">{{ date("d", strtotime($item->date)) }}</span>
                                        <span class="month">Jun</span>
                                    </div><!-- End .entry-date -->

                                    <h2 class="entry-title">
                                        <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                                    </h2>

                                    <div class="entry-content">
                                        <p>{{ $item->tomTat }}</p>

                                        <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}" class="read-more">Đọc Thêm <i class="icon-angle-double-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article>
                            @endforeach


                        </div><!-- End .owl-carousel -->
                    </div><!-- End .related-posts -->
                </div><!-- End .col-lg-9 -->

                <aside class="sidebar col-lg-3">
                    @include('trangchu.menu.sidebar')
                </aside>
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->
<!-- End .main -->
 @endsection @section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content="travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content="travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.tintuc') }}" /> @endsection
