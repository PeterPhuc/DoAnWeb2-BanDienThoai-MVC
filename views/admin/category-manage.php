<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/DoAnWeb2-BanDienThoai-MVC/controllers/account/check-session-login-admin.php");
?>
<div class="manage-zone">
    <h1 class="title">Quản lý danh mục sp</h1>
    <div class="table-manage">
        <h4 class="total-record">
            Bảng này có tổng <span>10<span> danh mục
        </h4>
        <div class="add-record">
            <button type="button" class="btn btn-success">Thêm</button>
        </div>
        <div class="table-container">
            <table style="min-width: initial">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên DM</th>
                        <th>Loại DM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>iphone</td>
                        <td>điện thoại</td>
                        <td class="ctrl">
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