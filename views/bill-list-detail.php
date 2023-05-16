<base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/DoAnWeb2-BanDienThoai-MVC/" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tệp giaodien/import.php dùng để dùng chung các đường dẫn css và js cho mọi trang -->
    <?php include("../views/shared/import.php") ?>

    <!-- Đây là link css riêng cho từng trang -->
    <link rel="stylesheet" href="assets/css/bill-list-detail.css">
    <title>Chi tiết hóa đơn</title>
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
                <h1>CHI TIẾT HÓA ĐƠN</h1>
                <h2>Mã hóa đơn: 100000001</h2>
                <div class="product-zone">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
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
                                <td>100</td>
                                <td>280.222.000đ</td>
                            </tr>
                            <tr>
                                <td class="img">
                                    <div class="wrapper">
                                        <img src="assets/images/products/iphone/iphone-11-trang.jpg" alt="">
                                    </div>
                                </td>
                                <td>iphone 14 pro max</td>
                                <td>100</td>
                                <td>280.222.000đ</td>
                            </tr>
                            <tr>
                                <td class="img">
                                    <div class="wrapper">
                                        <img src="assets/images/products/iphone/iphone-11-trang.jpg" alt="">
                                    </div>
                                </td>
                                <td>iphone 14 pro max</td>
                                <td>100</td>
                                <td>280.222.000đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>