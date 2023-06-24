@extends('layout_user')
@section('content')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="/frontend/assets/images/banner/banner-4.png">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Liên Hệ</h2>
                        <ul>
                            <li>
                                <a href="/home">Trang Chủ <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li>Liên Hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Shipping Area -->
    <div class="shipping-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="/frontend/assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Miễn Phí Vận Chuyển</h5>
                            <p class="short-desc mb-0">Miễn phí vẫn chuyển cho đơn hàng từ 1.500.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="/frontend/assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Hỗ Trợ</h5>
                            <p class="short-desc mb-0">Hỗ trợ khách hàng 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="/frontend/assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Thanh Toán An Toàn</h5>
                            <p class="short-desc mb-0">Mọi thông tin của khách hàng đều được bảo mật tuyệt đối</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shipping Area End Here -->

    <div class="contact-with-map">
        <div class="contact-map">
            <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form-area section-space-bottom-100">
            <div class="container">
                <div class="contact-form-wrap">
                    <form id="contact-form" class="contact-form" action="https://htmlmail.hasthemes.com/mamunur/harmic.php">
                        <h4 class="contact-form-title pb-2 mb-7">Liên Hệ Với Chúng Tôi</h4>
                        <div class="form-field">
                            <input type="text" name="con_name" id="con_name" placeholder="Nhập tên của bạn*" class="input-field">
                        </div>
                        <div class="form-field mt-6">
                            <input type="text" name="con_email" id="con_email" placeholder="Nhập Email*" class="input-field">
                        </div>
                        <div class="form-field mt-6">
                            <textarea name="con_message" id="con_message" placeholder="Ghi chú" class="textarea-field"></textarea>
                        </div>
                        <div class="button-wrap mt-8">
                            <button type="submit" value="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">Gửi</button>
                            <p class="form-messege mt-5 mb-0"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@endsection