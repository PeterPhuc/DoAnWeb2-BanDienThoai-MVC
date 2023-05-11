<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/DoAnWeb2-BanDienThoai-MVC/controllers/account/check-session-login-admin.php");
?>
<div class="manage-zone">
    <h1 class="title">Quản lý khách hàng</h1>
    <div class="table-manage">
        <h4 class="total-record">
            Bảng này có tổng <span>10<span> user
        </h4>
        <div class="add-record">
            <button type="button" class="btn btn-success">Thêm</button>
        </div>
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
                                <img src="assets/images/uploads/admin-avatar/admin-tin-le.jpg" alt="">
                            </div>
                        </td>
                        <td class="wrap-text">Tin Le</td>
                        <td class="td-padding">Lê Trung Tín</td>
                        <td>0937519600</td>
                        <td class="wrap-text">trungtin.le1505@gmail.com</td>
                        <td class="wrap-text">TanHoaDong, HCM</td>
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
                        <td class="wrap-text">Tin Nguyễn Nguyễn Nguyễn Azpilicuetagaraycosaroyarenberecolarrea Nguyễn
                            Nguyễn Nguyễn Nguyễn</td>
                        <td class="td-padding">Nguyễn Hoàng Giang Trường</td>
                        <td>09375196001</td>
                        <td class="wrap-text">
                            trungtin.le1505@gmail.comtrungtin.le1505@gmail.comtrungtin.le1505@gmail.comtrungtin.le1505@gmail.com
                        </td>
                        <td class="wrap-text">TanHoaDong, HCM</td>
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
                        <td class="wrap-text">Tin Le</td>
                        <td class="td-padding">Lê Hoàng Hiếu Nghĩa Đệ Nhất Thương Tâm Nhân</td>
                        <td>0937519600</td>
                        <td class="wrap-text">trungtin.le1505@gmail.com</td>
                        <td class="wrap-text">TanHoaDong, HCM</td>
                        <td class="ctrl" style="width: min-content">
                            <div class="btn">
                                <button type="button" class="btn btn-primary edit-item">
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