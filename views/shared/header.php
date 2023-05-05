<div class="header-container">
    <!-- Phần header gồm các dịch vụ của website -->
    <div class="header-services">
        <div class="icon icon--1">
            <i class="fa-solid fa-award"></i>
            <span>Hàng chính hãng</span>
        </div>
        <div class="icon icon--2">
            <i class="fa-solid fa-truck"></i>
            <span>Miễn phí vận chuyển</span>
        </div>
        <div class="icon icon--3">
            <i class="fa-solid fa-sack-dollar"></i>
            <span>Mua trả góp</span>
        </div>
        <div class="icon icon--4">
            <i class="fa-solid fa-headset"></i>
            <span>CSKH: 0937 519 600</span>
        </div>
    </div>

    <!-- Phần header content gồm logo, thanh search, giỏ hàng, hóa đơn -->
    <div class="header-content">
        <!-- Phần logo -->
        <div class="header-content__logo">
            <a href="index.php">
                <img src="assets/images/logo/king-mobile-cut.jpg" alt="" srcset="">
            </a>
        </div>
        <!-- Phần thanh search -->
        <div class="header-content__search">
            <input class="search-bar" name="search" placeholder="Nhập từ khoá cần tìm" value="">
            <button type="button" class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <!-- Phần giỏ hàng -->
        <div class="header-content__cart">
            <a href="views/gio-hang.php">
                <span class="cart-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </span>
                <span class="cart-content">Giỏ hàng</span>
            </a>
        </div>
        <!-- Phần hóa đơn -->
        <div class="header-content__bill">
            <a href="views/bill-list.php">
                <span class="bill-icon">
                    <i class="fa-solid fa-receipt"></i>
                </span>
                <span class="bill-content">Hóa đơn</span>
            </a>
        </div>
    </div>
    
</div>


    <!-- Phần menu chính của page -->
    <div class="header-menu">
        <!-- Phần nav bên trái gồm Trang chủ, Hỗ trợ, Giới thiệu -->
        <div class="nav-pages">
            <div class="item">
                <a href="index.php">Trang chủ</a>
            </div>
            <div class="item">
                <a href="views/ho-tro.php">Hỗ trợ</a>
            </div>
            <div class="item">
                <a href="views/gioi-thieu.php">Giới thiệu</a>
            </div>
        </div>

        <!-- Phần nav bên phải gồm Đăng ký, Đăng nhập -->
        <div class="nav-account logout-status" style="display: none">
            <div class="item">
                <a href="views/account/register.php">Đăng ký</a>
            </div>
            <div class="item">
                <a href="views/account/login.php">Đăng Nhập</a>
            </div>
        </div>

        <div class="nav-account login-status">
            <div class="item avatar-acc">
                <a href="views/account/profile-edit.php">
                    <img class="avatar" src="assets/images/uploads/147829542_897902317629414_521350483213470701_n.jpg" alt="" srcset="">
                </a>
            </div>
            <div class="item">
                <a href="">Đăng Xuất</a>
            </div>
        </div>
    </div>

    <!-- Phần slider (Dùng thư viện glide.js) -->
    <div class="header-slider-wrap" >
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <!-- <li class="glide__slide"><div class="slide" style="background-image: url('img/slider/slider-1.png')"></div></li> -->
                </ul>
            </div>
            <div class="glide__controls" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="|<">prev</button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir="|>">next</button>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <!-- <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button> -->
            </div>
        </div>
    </div>