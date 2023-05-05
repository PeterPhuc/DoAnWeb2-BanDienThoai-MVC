<?php
    session_start();
    include("../config/connect.php");
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/DoAnWeb2-BanDienThoai-MVC/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tệp giaodien/import.php dùng để dùng chung các đường dẫn css và js cho mọi trang -->
    <?php include("../views/shared/import.php") ?>

    <!-- Đây là link css riêng cho từng trang -->
    <link rel="stylesheet" href="assets/css/product-list.css">
    <title>Sản phẩm</title>
</head>
<body>
    <div class="wrapper">
        <!-- Phần header -->
        <?php include("../views/shared/header.php")?>

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Phần Sitebar danh mục sản phẩm -->
            <?php include("../views/shared/danh-muc-sp.php")?>

            <!-- Phần main content, phần này tùy page mà có giao diện khác nhau -->
            <div class="content-item content-main">
                <!-- Tiêu đề lớn -->
                <div class="main-title">
                    <h1>SAMSUNG</h1>
                </div>
                <!-- Khối container -->
                <div class="outstanding-products phone">
                    <!-- Các item sản phẩm -->
                    <div class="item">
                        <!-- Ảnh sp -->
                        <div class="image">
                            <img src="assets/images/products/iphone/iphone-12-den-new-2.jpg" alt="" srcset="">
                        </div>
                        <!-- Tên sp -->
                        <div class="title">
                            <h2>
                                iPhone 14 Pro Max
                            </h2>
                        </div>
                        <!-- Giá khuyến mãi -->
                        <div class="price-sale">
                            <p>
                                20.490.000₫
                            </p>
                        </div>
                        <!-- Giá gốc -->
                        <div class="price-origin">
                            <p>
                                <!-- giá gốc có gạch bỏ (line thought) -->
                                <span>
                                    27.490.000₫
                                </span>
                                <!-- % giảm giá -->
                                <span>
                                    -6%
                                </span>
                            </p>
                        </div>
                         <!-- Nút xem chi tiết sản phẩm  -->
                        <div class="detail">
                            <button type="button" class="btn btn-primary">
                                <a class="a" href="">Xem chi tiết</a>
                            </button>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="assets/images/products/iphone/iphone-13-pro-graphite.jpg" alt="" srcset="">
                        </div>
                        <div class="title">
                            <h2>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere repellat aliquam sint fugiat pariatur? Laborum nam, nemo, quae vitae, odit blanditiis accusantium odio placeat quidem rem nisi hic atque?
                            </h2>
                        </div>
                        <div class="price-sale">
                            <p>
                                20.490.000₫
                            </p>
                        </div>
                        <div class="price-origin">
                            <p>
                                <span>
                                    27.490.000₫
                                </span>
                                <span>
                                    -6%
                                </span>
                            </p>
                        </div>
                        <div class="detail">
                            <button type="button" class="btn btn-primary">
                                <a class="a" href="">Xem chi tiết</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>