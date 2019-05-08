@extends('trangchu.menu.master') @section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="product-col">Sản Phẩm</th>
                                <th class="price-col">Giá</th>
                                <th class="qty-col">Số Lượng</th>
                                <th>Tổng Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <script>
                                var decodedCookie = decodeURIComponent(document.cookie);
                                var ca = decodedCookie.split(';');
                                for(var i = 0; i < ca.length; i++) {
                                    if(ca[i].indexOf('soLuong')>0){
                                        var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                                        document.write('<tr class="product-row">');
                                        document.write('<td class="product-col">');
                                        document.write('<figure class="product-image-container">');
                                        document.write('<a class="product-image">');
                                        document.write('<img src="upload/'+item.img+'">');
                                        document.write('</a>');
                                        document.write('</figure>');
                                        document.write('<h2 class="product-title">');
                                        document.write('<a>'+item.tenSP+'</a>');
                                        document.write('</h2>');
                                        document.write('</td>');
                                        document.write('<td style="color:red">'+formatNumber(item.gia)+'vnđ</td>');
                                        document.write('<td><input class="form-control" id="cart'+item.id+'" onChange="thayDoi('+item.id+',this)" value="'+item.soLuong+'" type="number"></td>');
                                        document.write('<td style="color:red">'+formatNumber(item.gia * item.soLuong)+'vnđ</td>');
                                        document.write('</tr>');
                                        document.write('<tr class="product-action-row">');
                                        document.write('<td colspan="4" class="clearfix">');
                                        document.write('<div class="float-right">');
                                        document.write('<a href="" onClick="deleteCookie('+item.id+')" title="Xóa Sản Phẩm" class="btn-remove"><span class="sr-only">Remove</span></a>');
                                        document.write(' </div>');
                                        document.write('</td>');
                                        document.write('</tr>');
                                        console.log('item',item);
                                    }
                                }

                                function thayDoi(id,ele){
                                    console.log('thay doi', id, document.getElementById("cart"+id).value)
                                }

                                function formatNumber(num) {
                                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                                }

                                function deleteCookie(cname) {
                                        document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                                }


                            </script>

                            {{-- <tr class="product-row">
                                <td class="product-col">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="sauna/assets/images/products/product-4.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <h2 class="product-title">
                                        <a href="product.html">Black Slippers</a>
                                    </h2>
                                </td>
                                <td>$17.90</td>
                                <td> <input class="vertical-quantity form-control" type="text"></td>
                                <td>$17.90</td>
                            </tr> --}}

                        </tbody>

                        <tfoot>

                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->

                <div class="cart-discount">

                </div><!-- End .cart-discount -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>Summary</h3>

                    <h4>
                        <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                    </h4>

                    <div class="collapse" id="total-estimate-section">
                        <form action="#">
                            <div class="form-group form-group-sm">
                                <label>Country</label>
                                <div class="select-custom">
                                    <select class="form-control form-control-sm">
                                        <option value="USA">United States</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="China">China</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-sm">
                                <label>State/Province</label>
                                <div class="select-custom">
                                    <select class="form-control form-control-sm">
                                        <option value="CA">California</option>
                                        <option value="TX">Texas</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-sm">
                                <label>Zip/Postal Code</label>
                                <input type="text" class="form-control form-control-sm">
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-custom-control">
                                <label>Flat Way</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="flat-rate">
                                    <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-custom-control">
                                <label>Best Rate</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="best-rate">
                                    <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->
                        </form>
                    </div><!-- End #total-estimate-section -->

                    <table class="table table-totals">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$17.90</td>
                            </tr>

                            <tr>
                                <td>Tax</td>
                                <td>$0.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Order Total</td>
                                <td>$17.90</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="checkout-shipping.html" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
                        <a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>
                    </div><!-- End .checkout-methods -->
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->

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
