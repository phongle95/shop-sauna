@extends('trangchu.menu.master')
@section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div id="map"></div>
        <!-- End #map -->

        <div class="row">
            <div class="col-md-8">
                <h2 class="light-title">Write <strong>Us</strong></h2>

                <form action="#">
                    <div class="form-group required-field">
                        <label for="contact-name">Name</label>
                        <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                    </div>
                    <!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-email">Email</label>
                        <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                    </div>
                    <!-- End .form-group -->

                    <div class="form-group">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                    </div>
                    <!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-message">What’s on your mind?</label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                    </div>
                    <!-- End .form-group -->

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- End .form-footer -->
                </form>
            </div>
            <!-- End .col-md-8 -->

            <div class="col-md-4">
                <h2 class="light-title">Contact <strong>Details</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-phone"></i>
                        <p><a href="tel:">0201 203 2032</a></p>
                        <p><a href="tel:">0201 203 2032</a></p>
                    </div>
                    <div>
                        <i class="icon-mobile"></i>
                        <p><a href="tel:">201-123-3922</a></p>
                        <p><a href="tel:">302-123-3928</a></p>
                    </div>
                    <div>
                        <i class="icon-mail-alt"></i>
                        <p><a href="mailto:#">porto@gmail.com</a></p>
                        <p><a href="mailto:#">porto@portotemplate.com</a></p>
                    </div>
                    <div>
                        <i class="icon-skype"></i>
                        <p>porto_skype</p>
                        <p>porto_template</p>
                    </div>
                </div>
                <!-- End .contact-info -->
            </div>
            <!-- End .col-md-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-8"></div>
    <!-- margin -->
</main>
<!-- End .main -->
@endsection
@section('meta')
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
<meta name="og:url" content="{{ route('trangchu.pages.lienhe') }}" />
 @endsection
