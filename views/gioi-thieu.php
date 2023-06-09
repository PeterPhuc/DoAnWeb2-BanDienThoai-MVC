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
    <link rel="stylesheet" href="assets/css/gioi-thieu.css">
    <title>Giới thiệu</title>
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
                <div class="intro">
                    <h1>GIỚI THIỆU VỀ KING MOBILE</h1>
                    <p>Công ty Cổ phần Đầu tư KING MOBILE (KM) là nền tảng bán lẻ đa ngành nghề số 1 Việt Nam về doanh thu và lợi nhuận. </p>

                    <p>Với chiến lược omni-channel, Công ty vận hành mạng lưới hàng ngàn cửa hàng trên toàn quốc song song với việc tận dụng hiểu biết sâu rộng về khách hàng thông qua nền tảng dữ liệu lớn, năng lực chủ động triển khai các hoạt động hỗ trợ bán lẻ được xây dựng nội bộ và liên tục đổi mới công nghệ nhằm tạo ra trải nghiệm khách hàng vượt trội và thống nhất ở mọi kênh cũng như nâng cao sự gắn kết của người tiêu dùng với các thương hiệu của MWG. </p>

                    <p>KING MOBILE được thành lập từ năm 2023, là chuỗi bán lẻ thiết bị di động (điện thoại di động và phụ kiện) có thị phần số 1 Việt Nam với hơn 3.200 điểm bán thiết bị di động (bao gồm hơn 1.000 cửa hàng KING MOBILE) hiện diện tại 63 tỉnh thành trên khắp Việt Nam. Tất cả các sản phẩm SMARTPHONE là thế mạnh chính và cung cấp ra thị trường được đảm bảo 100% nguyên hộp, trùng IMEI với phụ kiện nguyên SEAL</p>
                    <p> Chúng tôi là cửa hàng lớn với uy tín đã được khảng định với tất cả các khách hàng cũng như các nhà phân phối, đối tác trong nước. Cám ơn tất cả các khách hàng đã mua và ủng hộ chúng tôi trong suốt thời gian qua.</p>

                    <h3>Logo chính thức của KING MOBILE</h3>
                    <div class="logo">
                        <img src="assets/images/logo/king-mobile-cut.jpg" alt="">
                    </div>

                    <p>Trụ sở chính: SAIGON UNI</p>
                    <p>Số điện thoại: 0937 519 600 (anh Tín)</p>
                    <p>Email: trungtin.le1505@gmail.com</p>

                    <h3>Vị trí của chúng tôi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31357.357814705763!2d106.6822583!3d10.7599171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1681209779964!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        
        <!-- Phần footer -->
        <?php include("../views/shared/footer.php")?>
    </div>
</body>
</html>