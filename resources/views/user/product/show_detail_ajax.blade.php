@extends('layout_user')
@section('content')
<!-- Begin Main Content Area  -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="/frontend/assets/images/banner/banner-4.png">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Chi tiết sản phẩm</h2>
                        <ul>
                            <li>
                                <a href="/home">Trang chủ <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li>Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($detail_product as $key => $value)
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img h-100">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" class="single-img gallery-popup">
                                        <img class="img-full" src="/upload/product/{{$value->product_anh}}" style="width: 645px;height:555px;" alt="Product Image">
                                    </a>
                                </div>
                                <!-- <div class="swiper-slide">
                                    <a href="/frontend/assets/images/product/large-size/2-2-555x645.jpg" class="single-img gallery-popup">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-2-555x645.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/frontend/assets/images/product/large-size/2-3-555x645.jpg" class="single-img gallery-popup">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-3-555x645.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/frontend/assets/images/product/large-size/2-4-555x645.jpg" class="single-img gallery-popup">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-4-555x645.jpg" alt="Product Image">
                                    </a>
                                </div> -->
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-thumb-with-content row">
                        <div class="col-12 order-lg-1 order-2 pt-10 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title">{{$value->product_ten}}</h2>
                                <div class="price-box pb-1">
                                    <span class="new-price text-danger">Giá bán: {{number_format($value->product_giaban)}} VND</span>
                                    <!-- <span class="old-price text-primary">$90.00</span> -->
                                </div>
                                <div class="rating-box-wrap pb-7">
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="review-status ps-4">
                                        <a href="javascript:void(0)">( 1 Customer Review )</a>
                                    </div> -->
                                </div>
                                <p class="short-desc mb-6">Mô tả giày: <?php
                                                                        echo strip_tags(html_entity_decode($value->product_mota));
                                                                        // xoá thẻ html trong ckeditor
                                                                        ?></p>
                                <form>
                                    @csrf
                                    <ul class="quantity-with-btn pb-7">
                                        <li class="quantity">
                                            <div class="cart-plus-minus">
                                                <input disabled class="cart-plus-minus-box cart_product_qty_{{$value->product_id}}" value="1" type="text" min="1" name="qty">
                                                <input type="hidden" value="{{$value->product_id}}" name="product_id_hidden">
                                            </div>
                                        </li>
                                        <li class="size_giay" style="line-height: 50px;">
                                            <span>Size: </span>
                                            <select name="chooseprosize_quantity" id="chooseprosize_quantity" class="chooseprosize cart_product_size_{{$value->product_id}}" style="width:70px;height:30px;">
                                                <!-- @foreach($size_product as $key => $size)
                                                <option value="{{$size->size_ten}}">{{$size->size_ten}}</option>
                                                @endforeach -->
                                                <option value="">Chọn</option>
                                                @foreach($kichco as $key => $size)
                                                <option value="{{$size->size_id}}">{{$size->productsize->size_ten}}</option>

                                                @endforeach
                                            </select>
                                            <input type="hidden" value="{{$value->product_id}}" class="product-id-size-hidden">

                                        </li>

                                        <li class="add-to-cart">
                                            <button type="button" data-id_product="{{$value->product_id}}" class="btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0 add-to-cart">
                                                Thêm vào giỏ hàng
                                            </button>
                                        </li>
                                        <li class="wishlist-btn-wrap">
                                            <a class="btn rounded-0" href="">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>


                                        <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                                        <input type="hidden" value="{{$value->product_ten}}" class="cart_product_ten_{{$value->product_id}}">
                                        <input type="hidden" value="{{$value->product_anh}}" class="cart_product_anh_{{$value->product_id}}">
                                        <input type="hidden" value="{{$value->product_giaban}}" class="cart_product_giaban_{{$value->product_id}}">

                                        <!-- hiện tại không dùng -->
                                        <input type="hidden" value="{{$value->product_soluong}}" class="cart_product_soluong_{{$value->product_id}}">
                                        <input type="hidden" value="{{$value->product_size}}">
                                    </ul>
                                </form>

                                <!-- số lượng sản phẩm còn theo size -->
                                <div class="text-matterhorn pb-2">
                                    <ul id="productsize_id" name="productsize_id" style="list-style: none;">

                                    </ul>

                                </div>

                                <div class="product-category text-matterhorn pb-2">
                                    <span class="title">Thuộc loại giày :</span>
                                    <ul>
                                        @foreach($detail_product as $key => $lsp_ctsp)
                                        <li>
                                            <a href="{{URL::to('/loai-san-pham/'.$lsp_ctsp->category_id)}}">{{$lsp_ctsp->category_ten}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- <div class="product-category product-tags text-matterhorn pb-4">
                                    <span class="title">Product Tags :</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Organic,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Vegetable,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Fruits</a>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="social-link align-items-center pb-lg-8">
                                    <span class="title pe-3">Chia sẻ:</span>
                                    <ul>
                                        <!-- <li>
                                            <span>chưa làm onchange số lượng khi chọn size</span>
                                        </li> -->
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 order-lg-2 order-1 pt-10 pt-lg-0">
                            <div class="swiper-container single-product-thumbs">
                                <div class="swiper-wrapper">
                                    <!-- <a href="javascript:void(0)" class="swiper-slide">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-1-555x645.jpg" alt="Product Thumnail">
                                    </a>
                                    <a href="javascript:void(0)" class="swiper-slide">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-2-555x645.jpg" alt="Product Thumnail">
                                    </a>
                                    <a href="javascript:void(0)" class="swiper-slide">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-3-555x645.jpg" alt="Product Thumnail">
                                    </a>
                                    <a href="javascript:void(0)" class="swiper-slide">
                                        <img class="img-full" src="/frontend/assets/images/product/large-size/2-4-555x645.jpg" alt="Product Thumnail">
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="product-tab-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav product-tab-style-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active btn btn-custom-size" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                Mô tả
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                Đánh giá
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">
                                Vận chuyển
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description-body">
                                <p class="short-desc mb-0"><?php
                                                            echo strip_tags(html_entity_decode($value->product_mota));
                                                            // xoá thẻ html trong ckeditor
                                                            ?></p>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-body">
                                <h4 class="heading mb-5">3 Review Items</h4>
                                <ul class="user-info-wrap">
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="/frontend/assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget, viverra auctor sem. Vivamus maximus enim vitae urna porta, ut euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="/frontend/assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget, viverra auctor sem. Vivamus maximus enim vitae urna porta, ut euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="/frontend/assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget, viverra auctor sem. Vivamus maximus enim vitae urna porta, ut euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="feedback-area pt-5">
                                    <h2 class="heading mb-1">Add a review</h2>
                                    <p class="short-desc mb-3">Your email address will not be published.</p>
                                    <div class="rating-box">
                                        <span>Your rating</span>
                                        <ul class="ps-4">
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                    <form class="feedback-form pt-8" action="#">
                                        <div class="group-input">
                                            <div class="form-field me-md-6 mb-6 mb-md-0">
                                                <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                            </div>
                                            <div class="form-field me-md-6 mb-6 mb-md-0">
                                                <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" name="number" placeholder="Phone number" class="input-field">
                                            </div>
                                        </div>
                                        <div class="form-field mt-6">
                                            <textarea name="message" placeholder="Message" class="textarea-field"></textarea>
                                        </div>
                                        <div class="button-wrap mt-8">
                                            <button type="submit" value="submit" class="btn btn-custom-size lg-size btn-secondary btn-primary-hover btn-lg rounded-0" name="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="product-shipping-body">
                                <h4 class="title">Shipping</h4>
                                <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to deliver. Our product is good with reasonable price and we believe you will worth it. So please wait for it patiently! Thanks.Any question please kindly to contact us and we promise to work hard to help you to solve the problem</p>
                                <h4 class="title">About return request</h4>
                                <p class="short-desc mb-4">If you don't need the item with worry, you can contact us then we will help you to solve the problem, so please close the return request! Thanks</p>
                                <h4 class="title">Guarantee</h4>
                                <p class="short-desc mb-0">If it is the quality question, we will resend or refund to you; If you receive damaged or wrong items, please contact us and attach some pictures about product, we will exchange a new correct item to you after the confirmation.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-slider-area section-space-top-95 section-space-bottom-100">
        <div class="container">
            <div class="section-title text-center pb-55">
                <span class="sub-title text-primary">Bạn có thể thích</span>
                <h2 class="title mb-0">Sản phẩm liên quan</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-slider-holder swiper-arrow">
                        <div class="swiper-container product-slider border-issue">
                            <div class="swiper-wrapper">
                                @foreach($sanpham_tuongtu as $key => $sptt)
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{URL::to('/chi-tiet-san-pham-ajax/'.$sptt->product_id)}}">
                                                <img class="img-full" src="/upload/product/{{$sptt->product_anh}}" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content texx">
                                            <a class="product-name" href="">{{$sptt->product_ten}}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">{{number_format($sptt->product_giaban)}} VND</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here  -->
@endsection