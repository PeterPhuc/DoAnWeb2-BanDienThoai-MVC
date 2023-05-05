<base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/DoAnWeb2-BanDienThoai-MVC/" />
<?php
    session_start();
    include("../config/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tệp giaodien/import.php dùng để dùng chung các đường dẫn css và js cho mọi trang -->
    <?php include("../views/shared/import.php") ?>

    <!-- Đây là link css riêng cho từng trang -->
    <link rel="stylesheet" href="assets/css/giohang.css">
    <title>Giỏ hàng</title>
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
            <div class="content-item content-main" style="background-color: #ffffff;">
                <h1>GIỎ HÀNG</h1>
                <div class="cart-zone cart-not-exist">
                    <p style="font-size: 2.2rem; padding-left: 1%">Bạn chưa có giỏ hàng nào cả!!!</p>
                </div>
                <div class="cart-zone cart-exist">
                    <div class="action-zone">
                        <button class="btn-delAll">Xóa tất cả</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th style="width: min-content">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="img">
                                    <div class="wrapper">
                                        <img src="assets/images/products/iphone/iphone-11-trang.jpg" alt="">
                                    </div>
                                </td>
                                <td>iphone 14 pro max</td>
                                <td>
                                    <div class="edit-soluong">
                                        <button>-</button>
                                        <input type="text" name="" id="">
                                        <button>+</button>
                                    </div>
                                </td>
                                <td>280.222.000đ</td>
                                <td class="ctrl" style="width: min-content">
                                    <div class="btn">
                                        <button type="button" class="btn btn-danger delete-item">
                                            Xóa
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="img">
                                    <div class="wrapper">
                                        <img src="assets/images/products/iphone/iphone-11-trang.jpg" alt="">
                                    </div>
                                </td>
                                <td>iphone 14 pro max</td>
                                <td>
                                    <div class="edit-soluong">
                                        <button>-</button>
                                        <input type="text" name="" id="">
                                        <button>+</button>
                                    </div>
                                </td>
                                <td>280.222.000đ</td>
                                <td class="ctrl" style="width: min-content">
                                    <div class="btn">
                                        <button type="button" class="btn btn-danger delete-item">
                                            Xóa
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="img">
                                    <div class="wrapper">
                                        <img src="assets/images/products/iphone/iphone-11-trang.jpg" alt="">
                                    </div>
                                </td>
                                <td>iphone 14 pro max</td>
                                <td>
                                    <div class="edit-soluong">
                                        <button>-</button>
                                        <input type="text" name="" id="">
                                        <button>+</button>
                                    </div>
                                </td>
                                <td>280.222.000đ</td>
                                <td class="ctrl" style="width: min-content">
                                    <div class="btn">
                                        <button type="button" class="btn btn-danger delete-item">
                                            Xóa
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="pay-zone">
                        <button type="button" class="btn btn-primary pay-action">
                            <a href="views/thanh-toan.php">THANH TOÁN</a>
                        </button>
                    </div>
                </div>
                <script src="assets/js/cart/cart.js" defer></script>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>