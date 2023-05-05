<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/DoAnWeb2-BanDienThoai-MVC/" />
    <?php include("../../views/shared/import.php") ?>
    <link rel="stylesheet" href="assets/css/admin/admin-homepage.css">
    <title>Trang Quản Trị</title>
</head>
<body>
    <div class="wrapper-full">
        <div class="sidebar">
            <div class="logo">
                <div class="wrap-img">
                    <img src="assets/images/logo/king-mobile-cut.jpg" alt="" srcset="">
                </div>
            </div>
            <div class="menu">
                <div class="menu__item">
                    <a href="">
                        <span class="item__icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="item__name">Khách hàng</span>
                    </a>
                </div>
                <div class="menu__item">
                    <a href="">
                        <span class="item__icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="item__name">Sản phẩm</span>
                    </a>
                </div>
                <div class="menu__item">
                    <a href="">
                        <span class="item__icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="item__name">Danh mục</span>
                    </a>
                </div>
                <div class="menu__item">
                    <a href="">
                        <span class="item__icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="item__name">Hóa đơn</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-main">
            <div class="account">
                <div class="avatar">
                    <a href="" class="link-profile" title="Xem profile">
                        <img src="assets/images/uploads/admin-tin-le.jpg" alt="" srcset="">
                    </a>
                </div>
                <div class="admin-name">
                    <span>
                        Tín Le
                    </span>
                </div>
                <div class="logout">
                    <a href="" class="link-logout" title="Đăng xuất">
                        <i class="fa-solid fa-arrow-right-from-bracket" style="color: #ff0000;"></i>
                    </a>
                </div>
            </div>
            <div class="manage-zone">
                <h1 class="title">Quản lý khách hàng</h1>
                <div class="table-manage">
                    <h4 class="total-record">
                        Bảng này có tổng <span>10<span> user
                    </h4>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Avatar</th>
                                    <th>Tên TK</th>
                                    <th>Họ tên</th>
                                    <th>Sđt</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100000001</td>
                                    <td class="img">
                                        <div class="wrapper">
                                            <img src="assets/images/uploads/admin-tin-le.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Tin Le</td>
                                    <td>Lê Trung Tín</td>
                                    <td>0937519600</td>
                                    <td>trungtin.le1505@gmail.com</td>
                                    <td>TanHoaDong, HCM</td>
                                    <td class="ctrl" style="width: min-content">
                                        <div class="btn">
                                            <button type="button" class="btn btn-primary delete-item">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger delete-item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100000001</td>
                                    <td class="img">
                                        <div class="wrapper">
                                            <img src="assets/images/uploads/admin-tin-le.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Tin Le</td>
                                    <td>Lê Trung Tín</td>
                                    <td>0937519600</td>
                                    <td>trungtin.le1505@gmail.com</td>
                                    <td>TanHoaDong, HCM</td>
                                    <td class="ctrl" style="width: min-content">
                                        <div class="btn">
                                            <button type="button" class="btn btn-primary delete-item">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger delete-item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100000001</td>
                                    <td class="img">
                                        <div class="wrapper">
                                            <img src="assets/images/uploads/admin-tin-le.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Tin Le</td>
                                    <td>Lê Trung Tín</td>
                                    <td>0937519600</td>
                                    <td>trungtin.le1505@gmail.com</td>
                                    <td>TanHoaDong, HCM</td>
                                    <td class="ctrl" style="width: min-content">
                                        <div class="btn">
                                            <button type="button" class="btn btn-primary delete-item">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger delete-item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100000001</td>
                                    <td class="img">
                                        <div class="wrapper">
                                            <img src="assets/images/uploads/admin-tin-le.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Tin Le</td>
                                    <td>Lê Trung Tín</td>
                                    <td>0937519600</td>
                                    <td>trungtin.le1505@gmail.com</td>
                                    <td>TanHoaDong, HCM</td>
                                    <td class="ctrl" style="width: min-content">
                                        <div class="btn">
                                            <button type="button" class="btn btn-primary delete-item">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger delete-item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100000001</td>
                                    <td class="img">
                                        <div class="wrapper">
                                            <img src="assets/images/uploads/admin-tin-le.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>Tin Le</td>
                                    <td>Lê Trung Tín</td>
                                    <td>0937519600</td>
                                    <td>trungtin.le1505@gmail.com</td>
                                    <td>TanHoaDong, HCM</td>
                                    <td class="ctrl" style="width: min-content">
                                        <div class="btn">
                                            <button type="button" class="btn btn-primary delete-item">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger delete-item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>