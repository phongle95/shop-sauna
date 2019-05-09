@extends('trangchu.menu.master')
@section('noidung')
<main class="main">
    <div class="page-header page-header-bg" style="background-image: url('sauna/assets/images/gt.jpg');">
        <div class="container">
            <h1 style="color:#fff"><span>GIỚI THIỆU VỀ CHÚNG TÔI</span>
                VINASS SAUNA</h1>
            <a href="{{ route('trangchu.pages.lienhe') }}" class="btn btn-dark">LIÊN HỆ</a>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giới Thiệu</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="about-section">
        <div class="container">
            <h2 class="subtitle">OUR STORY</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

            <p class="lead"></p>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .about-section -->

    <div class="features-section">
        <div class="container">
            <h2 class="subtitle">WHY CHOOSE US</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-shipped"></i>

                        <div class="feature-box-content">
                            <h3>Free Shipping</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-us-dollar"></i>

                        <div class="feature-box-content">
                            <h3>100% Money Back Guarantee</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box">
                        <i class="icon-online-support"></i>

                        <div class="feature-box-content">
                            <h3>Online Support 24/7</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .features-section -->

    <div class="testimonials-section">
        <div class="container">
            <h2 class="subtitle text-center">KHÁCH HÀNG PHẢN HỒI</h2>

            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img style="height:60px;" src="sauna/assets/images/dt.png" alt="client">
                        </figure>

                        <div>
                            <h4 class="testimonial-title">Mỹ Linh</h4>
                            <span>Đà Nẵng</span>
                        </div>
                    </div>
                    <!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
                    </blockquote>
                </div>
                <!-- End .testimonial -->

                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img src="sauna/assets/images/dt.png" alt="client">
                        </figure>

                        <div>
                            <h4 class="testimonial-title">Mỹ Linh</h4>
                            <span>Đà Nẵng</span>
                        </div>
                    </div>
                    <!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
                    </blockquote>
                </div>
                <!-- End .testimonial -->

                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img src="sauna/assets/images/dt.png" alt="client">
                        </figure>

                        <div>
                            <h4 class="testimonial-title">Mỹ Linh</h4>
                            <span>Đà Nẵng</span>
                        </div>
                    </div>
                    <!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
                    </blockquote>
                </div>
                <!-- End .testimonial -->
            </div>
            <!-- End .testimonials-slider -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .testimonials-section -->

    <div class="counters-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="500" data-speed="2000" data-refresh-interval="50">500</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">PHỤC VỤ KHÁCH HÀNG</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="50" data-speed="2000" data-refresh-interval="50">50</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">NHÂN VIÊN</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="24" data-speed="2000" data-refresh-interval="50">24</span><span>H</span>
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">HỔ TRỢ 24H</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="265" data-speed="2000" data-refresh-interval="50">265</span>+
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">PHỤC VỤ</h4>
                </div>
                <!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count" data-from="0" data-to="99" data-speed="2000" data-refresh-interval="50">99</span><span>%</span>
                    </div>
                    <!-- End .count-wrapper -->
                    <h4 class="count-title">HỔ TRỢ THÀNH CÔNG</h4>
                </div>
                <!-- End .col-md-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .counters-section -->
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
<meta name="og:url" content="{{ route('trangchu.pages.gioithieu') }}" />
 @endsection
