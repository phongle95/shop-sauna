<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Máy Xông Hơi Đà Nẵng</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="sauna/assets/images/logovinass.png">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="sauna/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="sauna/assets/css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="{{ route('trangchu.pages.trangchu') }}" class="logo">
                            <img src="sauna/assets/images/logovinass.png" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="{{ route('trangchu.timkiem.product') }}" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="tukhoa" id="q" placeholder="Bạn cần tìm gì ?" required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">Tất Cả Danh Mục</option>
                                            <option value="4">Máy Xông Hơi Ướt - Steam</option>
                                            <option value="12">Máy Xông Hơi Ướt - Sauna</option>
                                            <option value="13">Phòng Xông Hơi Hồng Ngoại</option>
                                            <option value="66">Phòng Xông Hơi Đá Muối Hymalaya</option>
                                            <option value="67">Bồn Tắm - Bồn Massage</option>
                                            <option value="5">Thiết Bị Phụ Kiện Xông Hơi</option>
                                            <option value="21">Hệ Thống Sửi Sàn</option>

                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->
                    </div>
                    <!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>

                        <div class="header-contact">
                            <span style="color:#fff;font-weight: 600;">Gọi Ngay</span>
                            <a href="tel:#"><strong>032 8811 678</strong></a>
                        </div>
                        <!-- End .header-contact -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="detail.html">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> x $99.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="detail.html" class="product-image">
                                                    <img src="sauna/assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="detail.html">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> x $35.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="detail.html" class="product-image">
                                                    <img src="sauna/assets/images/products/cart/product-2.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->
                                    </div>
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$134.00</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="" class="btn">View Cart</a>
                                        <a href="checkout-shipping.html" class="btn">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                            <li>
                                <a href="#" class="sf-with-ul">Danh Mục Sản Phẩm</a>

                                <ul>
                                    @foreach ($loaisanpham as $item)

                                    <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}">{{ $item->tenLoaiSanPham }}</a>

                                        <ul>
                                            @foreach ($mathang as $mh) @if ($item->id == $mh->maLoaiSanPham)
                                            <li><a href="{{ route('trangchu.pages.mathang',['name'=>str_slug($mh->tenMatHang),'id'=>$mh->id]) }}">{{ $mh->tenMatHang }}</a></li>

                                            @endif @endforeach

                                        </ul>

                                    </li>
                                    @endforeach
                                    <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug('Phòng Xông Hơi Đá Muối Hymalaya'),'id'=>20]) }}">Phòng Xông Hơi Đá Muối Hymalaya</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('trangchu.pages.gioithieu') }}">giới thiệu</a>
                            </li>
                            <li>
                                <a href="{{ route('trangchu.pages.sanpham') }}">sản phẩm</a>
                            </li>
                            <li>
                                    <a href="{{ route('trangchu.pages.congtrinh') }}">công trình</a>
                                </li>

                                <li>
                                    <a href="{{ route('trangchu.pages.tuyendung') }}">tuyển dụng</a>
                                </li>

                            <li class="float-right"><a href="{{ route('trangchu.pages.lienhe') }}">liên hệ</a></li>
                            <li class="float-right"><a href="{{ route('trangchu.pages.tintuc') }}">tin tức</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .header-bottom -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->
        @yield('noidung')
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=453100318560380&autoLogAppEvents=1"></script>

        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="widget widget-newsletter">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="widget-title">Đăng Ký Ngay</h4>
                                        <p>Đăng ký ngay để nhận được thông báo khuyến mãi của Vinass Sauna !</p>
                                    </div>
                                    <!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Nhập email" required>

                                            <input type="submit" class="btn" value="Đăng Ký">
                                        </form>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-md-9 -->

                        <div class="col-md-3 widget-social">
                            <div class="social-icons">
                                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                            </div>
                            <!-- End .social-icons -->
                        </div>
                        <!-- End .col-md-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .footer-top -->
            </div>
            <!-- End .container -->

            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Liên Hệ Với Chúng Tôi</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Địa Chỉ:</span>121 Cù Chính Lan,TP.Đà Nẵng
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:0328811678">032 8811 678</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">lehongphongcntt@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">My Account</h4>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="{{ route('trangchu.pages.gioithieu') }}">About Us</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="#">Orders History</a></li>
                                                    <li><a href="#">Advanced Search</a></li>
                                                    <li><a href="#" class="login-link">Login</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-sm-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="widget">
                                        <h4 class="widget-title">Main Features</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Super Fast Magento Theme</a></li>
                                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                                    <li><a href="#">20 Unique Homepage Layouts</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Powerful Admin Panel</a></li>
                                                    <li><a href="#">Mobile & Retina Optimized</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-sm-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-7 -->
                            </div>
                            <!-- End .row -->

                            <div class="footer-bottom">
                                <p class="footer-copyright">Vinass eCommerce. &copy; 2019. All Rights Reserved</p>

                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 7:00AM - 6:00PM
                                    </li>
                                </ul>
                                <img src="sauna/assets/images/payments.png" alt="payment methods" class="footer-payments">
                            </div>
                            <!-- End .footer-bottom -->
                        </div>
                        <!-- End .col-lg-9 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="{{ route('trangchu.pages.trangchu') }}">Trang Chủ</a></li>
                    <li>
                        <a href="">Danh Mục Sản Phẩm</a>
                        <ul>
                            @foreach ($loaisanpham as $item)

                            <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}">{{ $item->tenLoaiSanPham }}</a>

                                <ul>
                                    @foreach ($mathang as $mh) @if ($item->id == $mh->maLoaiSanPham)
                                    <li><a href="">{{ $mh->tenMatHang }}</a></li>

                                    @endif @endforeach

                                </ul>

                            </li>
                            @endforeach
                            <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug('Phòng Xông Hơi Đá Muối Hymalaya'),'id'=>20]) }}">Phòng Xông Hơi Đá Muối Hymalaya</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('trangchu.pages.gioithieu') }}">giới thiệu</a>
                    </li>
                    <li>
                        <a href="{{ route('trangchu.pages.sanpham') }}">sản phẩm</a>
                    </li>
                    <li>
                            <a href="{{ route('trangchu.pages.congtrinh') }}">công trình</a>
                        </li>

                        <li>
                            <a href="{{ route('trangchu.pages.tuyendung') }}">tuyển dụng</a>
                        </li>
                    <li><a href="{{ route('trangchu.pages.tintuc') }}">Tin Tức</a></li>
                    <li><a href="{{ route('trangchu.pages.lienhe') }}">Liên Hệ</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div>
            <!-- End .social-icons -->
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(sauna/assets/images/nvtv.jpg)">
        <div class="newsletter-popup-content">
            <img src="sauna/assets/images/logovinass.png" alt="Logo" class="logo-newsletter">
            <h2>ĐĂNG KÝ NGAY</h2>
            <p>Đăng ký ngay để nhận được thông báo khuyến mãi của Vinass Sauna !</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Nhập địa chỉ email" required>
                    <input type="submit" class="btn" value="Đăng Ký!">
                </div>
                <!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1"> Không hiện mục này nữa
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->
    </div>
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="sauna/assets/js/jquery.min.js"></script>
    <script src="sauna/assets/js/bootstrap.bundle.min.js"></script>
    <script src="sauna/assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="sauna/assets/js/main.min.js"></script>
    <!-- Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
    <script src="sauna/assets/js/map.js"></script>
</body>

</html>
