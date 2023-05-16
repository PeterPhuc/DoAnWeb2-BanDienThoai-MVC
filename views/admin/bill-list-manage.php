<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/DoAnWeb2-BanDienThoai-MVC/controllers/account/check-session-login-admin.php");
?>
<div class="manage-zone">
    <h1 class="title">Quản lý hóa đơn</h1>
    <div class="table-manage">
        <h4 class="total-record">
            Bảng này có tổng <span>10<span> hóa đơn
        </h4>
        <!-- <div class="add-record">
            <button type="button" class="btn btn-success">Thêm</button>
        </div> -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ Tên</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>Ngày lập hđ</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100000001</td>
                        <td>Nguyễn Văn A</td>
                        <td>0937519612</td>
                        <td>BinhChanh, HCM</td>
                        <td>30-04-2023</td>
                        <td>109.990.000</td>
                        <td>Đã giao</td>
                        <td class="ctrl">
                            <div class="btn" style="flex-wrap: wrap">
                                <button type="button" class="btn btn-danger delete-item">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button type="button" class="btn btn-success show-detail" style="font-size: 1.4rem; color: #fff">
                                    Chi tiết
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>