@extends('trangchu.menu.master') @section('noidung')

<main class="main">
        <br>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('trangchu.pages.trangchu') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thành Công</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <ul class="checkout-progress-bar">
                <li>
                    <span>Nhập Thông Tin</span>
                </li>
                <li class="active">
                    <span>Thành Công</span>
                </li>
            </ul>
            <h2 style="text-align:center">Đặt Hàng Thành Công</h2>
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->

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
    <meta name="og:url" content="{{ route('trangchu.pages.thanhcong') }}" />
     @endsection
