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
    <link rel="stylesheet" href="assets/css/thanh-toan.css">
    <title>Thanh toán</title>
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
                <h1>THANH TOÁN</h1>
                <div class="customer-info-zone">
                    <h2>Thông tin người đặt hàng</h2>
                    <div class="info-properties">
                        <span>HỌ TÊN: </span>
                        <span>LÊ TRUNG TÍN</span>
                    </div>
                    <div class="info-properties">
                        <span>ĐỊA CHỈ: </span>
                        <span>Tân Hòa Đông, HCM</span>
                    </div>
                    <div class="info-properties">
                        <span>SĐT: </span>
                        <span>0937519600</span>
                    </div>
                </div>
                <div class="pay-method-zone">
                    <h2>Phương thức thanh toán</h2>
                    <select class="form-select" multiple aria-label="multiple select example">
                        <option value="1" selected>Chuyển khoản qua thẻ ATM</option>
                        <option value="2">Trực tiếp tại cửa hàng</option>
                    </select>
                </div>
                <div class="grab-method-zone">
                    <h2>Phương thức giao hàng</h2>
                    <select class="form-select" multiple aria-label="multiple select example">
                        <option value="1" selected>Nhận tại cửa hàng</option>
                        <option value="2">Giao hàng tận nơi</option>
                    </select>
                </div>
                <h3 class="total-price">Tổng tiền thanh toán: 20.000.000VNĐ</h3>

                <div class="complete-pay-zone">
                    <button type="button" class="btn btn-primary pay-action">
                        <a href="">ĐẶT HÀNG</a>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>