@extends('trangchu.menu.master')
@section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 product-single-gallery">
                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="https://i.pinimg.com/originals/30/60/5a/30605a36231a5b7cd5ad0af4ee6774e3.jpg" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="https://hinhchuctet.com/wp-content/uploads/2018/09/hinh-gai-xinh-de-thuong-nhat-2.jpg" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="sauna/assets/images/products/xonghoikho.jpg" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="sauna/assets/images/products/xonghoikho.jpg"/>
                                    </div>
                                </div>

                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="https://hinhchuctet.com/wp-content/uploads/2018/09/hinh-gai-xinh-de-thuong-nhat-2.jpg" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="https://img2.thuthuatphanmem.vn/uploads/2019/01/04/hinh-co-gai-xinh-dep-de-thuong_025104709.jpg" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="https://i.pinimg.com/originals/30/60/5a/30605a36231a5b7cd5ad0af4ee6774e3.jpg" />
                                </div>
                                <div class="col-3 owl-dot">
                                    <img class="img-product" src="sauna/assets/images/products/xonghoikho.jpg" />
                                </div>
                            </div>
                        </div>
                        <!-- End .col-lg-7 -->

                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">Silver Porto Headset</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->

                                    <a href="#" class="rating-link">( 6 Reviews )</a>
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="old-price">$81.00</span>
                                    <span class="product-price">$101.00</span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-desc">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                </div>
                                <!-- End .product-desc -->


                                <div class="product-action product-all-icons">
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div>
                                    <!-- End .product-single-qty -->

                                    <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div>
                                <!-- End .product-action -->

                                <div class="product-single-share">
                                    <label>Share:</label>
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                                <!-- End .product single-share -->
                            </div>
                            <!-- End .product-single-details -->
                        </div>
                        <!-- End .col-lg-5 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div>
                                    <!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div>
                            <!-- End .product-tags-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                </div>
                                <!-- End .collateral-box -->

                                <div class="add-product-review">
                                    <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                    <p>How do you rate this product? *</p>

                                    <form action="#">
                                        <table class="ratings-table">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>1 star</th>
                                                    <th>2 stars</th>
                                                    <th>3 stars</th>
                                                    <th>4 stars</th>
                                                    <th>5 stars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Quality</td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Value</td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <label>Nickname <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-group">
                                            <label>Summary of Your Review <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-group mb-2">
                                            <label>Review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->

                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </form>
                                </div>
                                <!-- End .add-product-review -->
                            </div>
                            <!-- End .product-reviews-content -->
                        </div>
                        <!-- End .tab-pane -->
                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
            <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">
                    <div class="widget widget-brand">
                        <a href="#">
                            <img src="sauna/assets/images/product-brand.png" alt="brand name">
                        </a>
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-info">
                        <ul>
                            <li>
                                <i class="icon-shipping"></i>
                                <h4>FREE<br>SHIPPING</h4>
                            </li>
                            <li>
                                <i class="icon-us-dollar"></i>
                                <h4>100% MONEY<br>BACK GUARANTEE</h4>
                            </li>
                            <li>
                                <i class="icon-online-support"></i>
                                <h4>ONLINE<br>SUPPORT 24/7</h4>
                            </li>
                        </ul>
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-banner">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="sauna/assets/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                            </a>
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .widget -->

                    <div class="widget widget-featured">
                        <h3 class="widget-title">Featured Products</h3>

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

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="sauna/assets/images/products/small/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Headphone</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:20%"></span>
                                                    <!-- End .ratings -->
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$60.00</span>
                                                <span class="product-price">$45.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                    <!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="sauna/assets/images/products/small/product-3.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Shoes</a>
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
                                                <span class="product-price">$50.00</span>
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

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="sauna/assets/images/products/small/product-5.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Watch-Gray</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <!-- End .ratings -->
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$29.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                    <!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="sauna/assets/images/products/small/product-6.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Hat</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:20%"></span>
                                                    <!-- End .ratings -->
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$40.00</span>
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
            </aside>
            <!-- End .col-md-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">Sản Phẩm Liên Quan </h2>

            <div class="featured-products owl-carousel owl-theme owl-dots-top">
                <div class="product">
                    <figure class="product-image-container">

                        <a href="detail.html" class="product-image1">
                            <img src="https://i.pinimg.com/originals/30/60/5a/30605a36231a5b7cd5ad0af4ee6774e3.jpg" alt="product">
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
                            <a href="detail.html">Máy xông hơi ướt KINGSTEAM N45 (4,5KW)</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">8.000.000</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">

                        <a href="detail.html" class="product-image">
                            <img src="sauna/assets/images/products/xonghoiuot.jpg" alt="product">
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
                            <a href="detail.html">Máy xông hơi ướt KINGSTEAM N45 (4,5KW)</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">8.000.000</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->
                <div class="product">
                    <figure class="product-image-container">

                        <a href="detail.html" class="product-image">
                            <img src="sauna/assets/images/products/xonghoiuot.jpg" alt="product">
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
                            <a href="detail.html">Máy xông hơi ướt KINGSTEAM N45 (4,5KW)</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">8.000.000</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">

                        <a href="detail.html" class="product-image">
                            <img src="sauna/assets/images/products/xonghoiuot.jpg" alt="product">
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
                            <a href="detail.html">Máy xông hơi ướt KINGSTEAM N45 (4,5KW)</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">8.000.000</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">

                        <a href="detail.html" class="product-image">
                            <img src="sauna/assets/images/products/xonghoiuot.jpg" alt="product">
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
                            <a href="detail.html">Máy xông hơi ướt KINGSTEAM N45 (4,5KW)</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">Giá : <strong style="color:red">8.000.000</strong> vnđ</span>
                        </div>
                        <!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Thêm vào giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product -->
            </div>
            <!-- End .featured-proucts -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .featured-section -->
</main>
<!-- End .main -->
@endsection
@section('meta')
<title>Du Lịch Lý Sơn - Thuê Xe Đà Nẵng - Khách Sạn Lý Sơn</title>
<meta name="keywords" content="du lịch lý sơn ,tour lý sơn,du lịch lý sơn giá rẻ,du lịch quảng ngãi lý sơn,du lịch đà nẵng lý sơn , du lịch hội an lý sơn" />
<meta name="description" content='lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn' />
<!--meta facebook-->
<meta property="og:title" content="Du Lịch Lý Sơn - Tour Lý Sơn - Thuê Xe Đà Nẵng" />
<meta property="og:description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta property="og:image" content= "travel/images/dulich.jpg" />
<!--meta google-->
<meta itemprop="name" content="du lịch lý sơn chuyên tổ chức các tour du lịch lý sơn , đà nẵng , hội an , huế và cho thuê xe du lịch" />
<meta itemprop="description" content="lysonvn là kênh thông tin online hổ trợ đặt tour , đặt phòng khách sạn cho thuê xe giá rẻ khi đi du lịch lý sơn , đà nẵng , hội an , huế và nhận đặt vé tàu khi đi lý sơn" />
<meta itemprop="image" content= "travel/images/dulich.jpg" />
<meta name="og:url" content="{{ route('trangchu.pages.lienhe') }}"/>
@endsection
