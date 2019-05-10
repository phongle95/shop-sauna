@extends('trangchu.menu.master')
@section('noidung')
<main class="main">
        <div class="banner banner-cat" style="background-image: url('sauna/assets/images/sanpham1.jpg');">
            <div class="banner-content container">

            </div>
            <!-- End .banner-content -->
        </div>
        <!-- End .banner -->

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb mt-0">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Sản Phẩm abc</li>
                </ol>
            </div>
            <!-- End .container -->
        </nav>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <div class="row row-sm">
                        @foreach ($data as $item)

                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product">
                                <figure class="product-image-container">

                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image3">
                                        <img src="upload/{{ $item->img }}" alt="máy xông hơi">
                                    </a>
                                    <span class="product-label label-sale">-20%</span>
                                    <span class="product-label label-hot">New</span>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <h2 class="product-title">
                                                <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                            </h2>
                                    <div class="price-box">
                                        <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-wishlist" title="chi tiết sản phẩm">
                                            <span>Chi tiết</span>
                                        </a>

                                        <a  onclick="addCart({{ $item }})" href="" class="paction add-cart" title="Thêm vào giỏ">
                                            <span>Thêm Vào Giỏ</span>
                                        </a>

                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="paction add-compare" title="chi tiết sản phẩm">
                                            <span>Chi tiết</span>
                                        </a>
                                    </div>
                                    <!-- End .product-action -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-xl-3 -->
                        @endforeach

                    </div>
                    <!-- End .row -->

                    <nav class="toolbox toolbox-pagination">


                        <ul class="pagination">

                            <li class="page-item">{!! $data->links() !!}</li>


                        </ul>
                    </nav>
                </div>
                <!-- End .col-lg-9 -->

                <aside class="sidebar-shop col-lg-3 order-lg-first">
                    <div class="sidebar-wrapper">
                            <div class="widget">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">Danh Mục Sản Phẩm</a>
                                    </h3>

                                    <div class="collapse show" id="widget-body-1">
                                        <div class="widget-body">
                                            <ul class="cat-list">
                                                @foreach ($loaisanpham as $item)

                                                <li><a href="{{ route('trangchu.pages.listproduct',['slug'=>str_slug($item->tenLoaiSanPham),'id'=>$item->id]) }}">{{ $item->tenLoaiSanPham }}</a></li>

                                                @endforeach

                                            </ul>
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->

                                <div class="widget">
                                        <h3 class="widget-title">
                                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-1">Sản Phẩm</a>
                                        </h3>

                                        <div class="collapse show" id="widget-body-2">
                                            <div class="widget-body">
                                                <ul class="cat-list">
                                                    @foreach ($mathang as $item)

                                                    <li><a href="{{ route('trangchu.pages.mathang',['name'=>str_slug($item->tenMatHang),'id'=>$item->id]) }}">{{ $item->tenMatHang }}</a></li>

                                                    @endforeach


                                                </ul>
                                            </div>
                                            <!-- End .widget-body -->
                                        </div>
                                        <!-- End .collapse -->
                                    </div>
                                    <!-- End .widget -->



                        <div class="widget widget-featured">
                            <h3 class="widget-title">Sản Phẩm Bán Chạy</h3>

                            <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            @foreach ($product as $item)

                                            <div class="product product-sm">
                                                <figure class="product-image-container">
                                                    <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image">
                                                        <img style="height:70px" src="upload/{{ $item->img }}" alt="máy xông hơi">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h2 class="product-title">
                                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                                    </h2>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <!-- End .ratings -->
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span style="color:red" class="product-price">{{ number_format($item->gia) }} vnđ</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <!-- End .product -->
                                            @endforeach


                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                                @foreach ($product1 as $item)

                                                <div class="product product-sm">
                                                    <figure class="product-image-container">
                                                        <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}" class="product-image">
                                                            <img style="height:70px" src="upload/{{ $item->img }}" alt="máy xông hơi">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}">{{ $item->tenSP }}</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:80%"></span>
                                                                <!-- End .ratings -->
                                                            </div>
                                                            <!-- End .product-ratings -->
                                                        </div>
                                                        <!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span style="color:red" class="product-price">{{ number_format($item->gia) }} vnđ</span>
                                                        </div>
                                                        <!-- End .price-box -->
                                                    </div>
                                                    <!-- End .product-details -->
                                                </div>
                                                <!-- End .product -->
                                                @endforeach


                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                        </div>
                        <!-- End .widget -->


                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->

        <div class="mb-5"></div>
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
<meta name="og:url" content="{{ route('trangchu.pages.trangchu') }}" />


<script>
    function getDataCart(){
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            if(ca[i].indexOf('soLuong')>0){
                var item = JSON.parse(ca[i].substring(ca[i].indexOf('=')+1));
                console.log('item',item);
            }
        }
    }

    function addCart(data){
        var item = {
            id: data.id,
            img: data.img,
            tenSP: data.tenSP,
            gia: data.gia,
            soLuong: data.soLuong
        };

        // kiem tra so luong co chua
        if(item.soLuong === undefined || item.soLuong === null){
            item.soLuong = 1;
        }

        var value = JSON.stringify(item);
        console.log('truoc',value,item.id)
        console.log('co chua',getCookie(item.id));
        if(getCookie(item.id)===""){
            console.log('phong');
            // chua ton tai thi them vao gio hang
            setCookie(item.id, value, 1);

        } else {
            // cap nhat so luong
            console.log('cap nhap',getCookie(item.id));

            var oldItem = JSON.parse(getCookie(item.id));
            item.soLuong += oldItem.soLuong;

            // xoa thang cu
            deleteCookie(item.id);

            // them thang moi
            value = JSON.stringify(item);
            setCookie(item.id, value, 1);
        }
        console.log('sau',getCookie(item.id));
    }

    function deleteCookie(cname) {
        document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    function setCookie(cname,cvalue,exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      console.log('decodedCookie',decodedCookie);

      var ca = decodedCookie.split(";");
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie() {
      var user=getCookie("username");
      if (user != "") {
        alert("Welcome again " + user);
      } else {
         user = prompt("Please enter your name:","");
         if (user != "" && user != null) {
           setCookie("username", user, 30);
         }
      }
    }
</script>
