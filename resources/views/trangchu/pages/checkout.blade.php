@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <br>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <ul class="checkout-progress-bar">
                <li class="active">
                    <span>Nhập Thông Tin </span>
                </li>
                <li>
                    <span>Thành Công</span>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-8">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Đặt Hàng</h2>



                            <form action="#">
                                <div class="form-group required-field">
                                    <label>Họ Và Tên </label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Số Điện Thoại </label>
                                    <input type="number" class="form-control" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label>Gmail </label>
                                    <input type="email" class="form-control">
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Địa Chỉ</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .form-group -->
                                <div class="form-group">
                                        <a href="{{ route('trangchu.pages.thanhcong') }}"  class="btn btn-primary">Đặt Hàng</a>
                                </div><!-- End .form-group -->


                            </form>
                        </li>


                    </ul>
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="order-summary">
                            <h3 style="text-align:center;font-weight:600;">Danh Mục</h3>

                        <h4>
                            <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">Sản Phẩm</a>
                        </h4>

                        <div class="collapse" id="order-cart-section">
                            <table class="table table-mini-cart">
                                <tbody>
                                        <script>
                                                var decodedCookie = decodeURIComponent(document.cookie);
                                                var ca = decodedCookie.split(';');

                                                for(var i = 0; i < ca.length; i++) {
                                                    if(ca[i].indexOf('soLuong')>0){
                                                        var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                                                        document.write('<tr>');
                                                        document.write('<td class="product-col">');
                                                        document.write('<figure class="product-image-container">');
                                                        document.write('<a class="product-image"><img src="upload/'+item.img+'"></a>');
                                                        document.write('</figure>');
                                                        document.write(' <div>');
                                                        document.write(' <h2 class="product-title">Số Lượng : '+item.soLuong+'</h2>');
                                                        document.write('</div>');
                                                        document.write(' </td>');
                                                        document.write('<td class="price-col">'+formatNumber(item.gia * item.soLuong)+'.vnđ</td>');
                                                        document.write(' </tr>');


                                                    }
                                                }

                                                function formatNumber(num) {
                                                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                                                }



                                            </script>


                                </tbody>
                            </table>
                        </div><!-- End #order-cart-section -->
                    </div><!-- End .order-summary -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->


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
    <meta name="og:url" content="{{ route('trangchu.pages.checkout') }}" />
     @endsection
