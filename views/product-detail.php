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
    <link rel="stylesheet" href="assets/css/product-detail.css">
    <title>Chi tiết sản phẩm</title>
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
                <h1>CHI TIẾT SẢN PHẨM</h1>
                <div class="info-zone">
                    <div class="product-image">
                        <img src="assets/images/products/samsung/samsung-galaxy-a23-cam-thumb.jpg" alt="" srcset="">
                    </div>
                    <div class="product-infor">
                        <h1>SAMSUNG GALAXY A23 5G</h1>
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
                        <p class="soluong">Số lượng: 100</p>
                        <button type="button" class="btn btn-primary add-cart">
                            <a href="">THÊM VÀO GIỎ</a>
                        </button>
                    </div>
                </div>
                
                <div class="product-specification">
                    <h1>Cấu hình Xiaomi redmi note 11 pro 5g</h1>
                    <table>
                        <tbody>
                        <tr><td> Màn hình</td><td>AMOLED6.67"Full HD+</td></tr><tr><td>Hệ điều hành:</td><td>Android 11</td></tr><tr><td>Camera sau:</td><td>Chính 108 MP & Phụ 8 MP, 2 MP</td></tr><tr><td>Camera trước:</td><td>16MP</td></tr><tr><td>Chip:</td><td>Snapdragon 695 5G</td></tr><tr><td> RAM:</td><td>4 GB </td></tr><tr><td>Dung lượng lưu trữ:</td><td>256GB </td></tr><tr><td>SIM:</td><td>2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 5G</td></tr><tr><td>Pin</td><td>5000 mAh25 W</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="product-description">
                    <h1>Thông tin sản phẩm</h1>
                    <p>
                    Điện thoại Xiaomi Redmi Note 11 Pro 5G hội tụ đủ những yếu tố ấn tượng của một chiếc smartphone tầm trung: Camera 108 MP số 1 phân khúc, màn hình AMOLED 120 Hz, pin 5000 mAh, sạc nhanh 67 W, hỗ trợ 5G cùng con chip Snapdragon 695 mạnh mẽ.<br>Camera độ phân giải cao: Redmi Note 11 Pro 5G có camera chính 108 MP, camera góc siêu rộng 8 MP và một camera macro 2 MP, máy chỉ có 3 camera và không có camera xóa phông như Redmi Note 11 Pro 4G. Chế độ chụp đêm vẫn tái hiện được màu sắc cảnh vật, nhìn chung thì ảnh chụp ban đêm có chất lượng tương đối tốt, độ nhiễu ít, tuy nhiên cũng có hiện tượng lóe sáng ở các cột đèn. Tuy không có camera xóa phông nhưng Redmi Note 11 Pro 5G vẫn có thể chụp xóa phông, chất lượng đem lại vẫn rất ổn áp, xóa phông rất mịn và nét, không bị lấn vào chủ thể nhiều. <br>Hiệu năng ổn định, hỗ trợ 5G: Điện thoại Xiaomi sở hữu con chip Snapdragon 695 5G được đánh giá tốt, khi chơi Asphalt 9 chất lượng đồ họa cao FPS ổn định ở mức 30, di chuyển trái phải mượt mà. Liên Quân Mobile chơi max cấu hình FPS ổn định ở mức 60, di chuyển mượt mà, combat ổn định, tung chiêu nhanh, không bị giật lag kể cả khi giao tranh tổng. <br> Với các đặc điểm trên, Xiaomi Redmi Note 11 Pro 5G là một sản phẩm không thể bỏ qua trong phân khúc tầm trung. Cấu hình ổn định, màn hình mượt mà cùng cụm camera chụp tốt, phù hợp hầu hết với mọi đối tượng người dùng.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>