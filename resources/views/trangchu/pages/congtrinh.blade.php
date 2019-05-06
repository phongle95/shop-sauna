@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Công Trình</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @foreach ($tin as $item)

                <article class="entry">
                    <div class="entry-media">
                        <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                            <img src="upload/{{ $item->img }}" alt="tin tức xông hơi">
                        </a>
                    </div>
                    <!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">{{ date("d", strtotime($item->date)) }}</span>
                            <span class="month">May</span>
                        </div>
                        <!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                        </h2>

                        <div class="entry-content">
                            <p>{{ $item->tomTat }}</p>

                            <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}" class="read-more">Đọc Thêm<i class="icon-angle-double-right"></i></a>
                        </div>
                        <!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>{{ date("d-m-Y", strtotime($item->date)) }}</span>
                            <span><i class="icon-user"></i>By <a>Phong Lê</a></span>

                        </div>
                        <!-- End .entry-meta -->
                    </div>
                    <!-- End .entry-body -->
                </article>
                <!-- End .entry -->
                @endforeach




                <nav class="toolbox toolbox-pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>

                        <li class="page-item"> {!! $tin->links() !!}</li>

                    </ul>
                </nav>
            </div>
            <!-- End .col-lg-9 -->
            <aside class="sidebar col-lg-3">
                @include('trangchu.menu.sidebar')
            </aside>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-6"></div>
    <!-- margin -->
</main>
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
