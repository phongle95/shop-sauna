<h2><span class="badge badge-warning" style="color:#fff;">Tìm Kiếm</span></h2>
<div class="sidebar-wrapper">
    <div class="widget widget-search">
        <form method="GET" role="search" method="get" class="search-form" action="{{ route('trangchu.timkiem.news') }}">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập vào để tìm kiếm" name="s" required>
            <button type="submit" class="search-submit" title="Search">
                <i class="icon-search"></i>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    <!-- End .widget -->



    <div class="widget">
            <h2><span class="badge badge-warning" style="color:#fff;">Tin Nổi Bật</span></h2>

        <ul class="simple-entry-list">
            @foreach ($sidebar as $item)

            <li>
                <div class="entry-media">
                    <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                        <img style="height:100px;" src="upload/{{ $item->img }}" alt="hình xông hơi">
                    </a>
                </div>
                <!-- End .entry-media -->
                <div class="entry-info">
                    <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                    <div class="entry-meta">
                            {{ date("d-m-Y", strtotime($item->date)) }}
                    </div>
                    <!-- End .entry-meta -->
                </div>
                <!-- End .entry-info -->
            </li>
            @endforeach


        </ul>
    </div>
    <!-- End .widget -->

    <div class="widget">
            <h2><span class="badge badge-warning" style="color:#fff;">Tag</span></h2>

        <div class="tagcloud">
           @foreach ($tag as $item)

            <a href="{{ route('trangchu.pages.loaitin',['slug'=>str_slug($item->tenLoaiTin),'id'=>$item->id]) }}">{{ $item->tenLoaiTin }}</a>
           @endforeach

        </div>
        <!-- End .tagcloud -->
    </div>
    <!-- End .widget -->

    <div class="widget">


            <div class="widget widget-featured">
                    <h2><span class="badge badge-warning" style="color:#fff;">Sản Phẩm Bán Chạy</span></h2>

                    <div class="widget-body">
                        <div class="owl-carousel widget-featured-products">
                            <div class="featured-col">
                                <div class="product product-sm">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img style="height:70px" src="https://i.pinimg.com/originals/30/60/5a/30605a36231a5b7cd5ad0af4ee6774e3.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Ring</a>
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
                                            <span class="product-price">$45.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <!-- End .product -->


                            </div>
                            <!-- End .featured-col -->

                            <div class="featured-col">
                                <div class="product product-sm">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="sauna/assets/images/products/small/product-4.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Watch-Black</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$50.00</span>
                                            <span class="product-price">$35.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <!-- End .product -->


                            </div>
                            <!-- End .featured-col -->
                        </div>
                        <!-- End .widget-featured-slider -->
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .widget -->
    </div>
    <!-- End .widget -->

</div>
<!-- End .sidebar-wrapper -->
