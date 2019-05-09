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
                                var sum = 0;
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
                                        document.write('<td style="color:red">'+formatNumber(item.gia)+'.vnđ</td>');
                                        document.write('<td><input class="form-control" id="cart'+item.id+'" onChange="thayDoi('+item.id+',this)" value="'+item.soLuong+'" type="number"></td>');
                                        document.write('<td style="color:red">'+formatNumber(item.gia * item.soLuong)+'.vnđ</td>');
                                        document.write('</tr>');
                                        document.write('<tr class="product-action-row">');
                                        document.write('<td colspan="4" class="clearfix">');
                                        document.write('<div class="float-right">');
                                        document.write('<a href="" onClick="deleteCookie('+item.id+')" title="Xóa Sản Phẩm" class="btn-remove"><span class="sr-only">Remove</span></a>');
                                        document.write(' </div>');
                                        document.write('</td>');
                                        document.write('</tr>');

                                        sum += item.gia * item.soLuong;
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

                                function deleteAllCookies() {
                                    var cookies = document.cookie.split(";");

                                    for (var i = 0; i < cookies.length; i++) {
                                        var cookie = cookies[i];
                                        var eqPos = cookie.indexOf("=");
                                        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                                        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                                    }
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
                                <tr>
                                    <td colspan="4" class="clearfix">

                                        <div class="float-right">
                                            <a href="" onClick="deleteAllCookies()" class="btn btn-outline-secondary btn-update-cart">Xóa Tất Cả</a>
                                        </div><!-- End .float-right -->
                                    </td>
                                </tr>
                            </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->

                <div class="cart-discount">

                </div><!-- End .cart-discount -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3 style="text-align:center;font-weight:600;">Danh Mục</h3>


                    <table class="table table-totals">
                        <tbody>
                                <script>
                                        var decodedCookie = decodeURIComponent(document.cookie);
                                        var ca = decodedCookie.split(';');

                                        for(var i = 0; i < ca.length; i++) {
                                            if(ca[i].indexOf('soLuong')>0){
                                                var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                                                document.write('<tr>');
                                                document.write('<td>'+item.tenSP+'</td>');
                                                document.write('<td style="color:red">'+formatNumber(item.gia * item.soLuong)+'.vnđ</td>');
                                                document.write('</tr>');

                                            }
                                        }

                                        function formatNumber(num) {
                                            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                                        }



                                    </script>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Tổng Cộng</td>
                                <td><script>document.write(formatNumber(sum)+".vnđ"); </script></td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="{{ route('trangchu.pages.checkout') }}" class="btn btn-block btn-sm btn-primary">Thanh Toán</a>
                    </div><!-- End .checkout-methods -->
                </div><!-- End .cart-summary -->
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
<meta name="og:url" content="{{ route('trangchu.pages.cart') }}" />
 @endsection
