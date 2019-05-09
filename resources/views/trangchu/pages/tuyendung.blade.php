@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Tuyển Dụng</li>
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
<title>Sauna Đà Nẵng - Phòng Xông Hơi</title>
<meta name="keywords" content="máy xông hơi,sauna , máy xông hơi đà nẵng , phòng xông hơi " />
<meta name="description" content='Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng.' />
<!--meta facebook-->
<meta property="og:title" content="Sauna Đà Nẵng - Phòng Xông Hơi" />
<meta property="og:description" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta property="og:image" content="sauna/assets/images/dt.png" />
<!--meta google-->
<meta itemprop="name" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta itemprop="description" content="Sauna Đà nẵng là một trong những công ty hàng đầu trong lĩnh vực thiết kế, lắp đặt , sửa chữa , bảo hành, cung ứng phòng , máy xông hơi tại Việt Nam.
Với đội ngũ nhân viên ngày càng đông đảo có trình độ chuyên môn cao, tay nghề vững vàng nên doanh nghiệp ngày càng được sự tín nhiệm của khách hàng." />
<meta itemprop="image" content="sauna/assets/images/dt.png" />
<meta name="og:url" content="{{ route('trangchu.pages.tuyendung') }}" />
 @endsection
