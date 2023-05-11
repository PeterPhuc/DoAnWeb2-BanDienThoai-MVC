<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/DoAnWeb2-BanDienThoai-MVC/controllers/account/check-session-login-admin.php");
?>
<div class="manage-zone">
    <h1 class="title">Quản lý sản phẩm</h1>
    <div class="table-manage">
        <h4 class="total-record">
            Bảng này có tổng <span>10<span> sản phẩm
        </h4>
        <div class="add-record">
            <button type="button" class="btn btn-success">Thêm</button>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh SP</th>
                        <th>Tên SP</th>
                        <th>Giá gốc</th>
                        <th>Giá KM</th>
                        <th>Số lượng</th>
                        <th>Danh mục</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2000000001</td>
                        <td class="img">
                            <div class="wrapper">
                                <img src="assets/images/products/iphone/iphone-14-pro-max-vang-thumb.jpg" alt="">
                            </div>
                        </td>
                        <td>Iphone 14 pro max</td>
                        <td>27.490.000</td>
                        <td>20.999.000</td>
                        <td>180</td>
                        <td>iphone</td>
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
                    <tr>
                        <td>2000000001</td>
                        <td class="img">
                            <div class="wrapper">
                                <img src="assets/images/products/iphone/iphone-14-pro-max-vang-thumb.jpg" alt="">
                            </div>
                        </td>
                        <td>Iphone 14 pro max</td>
                        <td>27.490.000</td>
                        <td>20.999.000</td>
                        <td>180</td>
                        <td>iphone</td>
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
                    <tr>
                        <td>2000000001</td>
                        <td class="img">
                            <div class="wrapper">
                                <img src="assets/images/products/iphone/iphone-14-pro-max-vang-thumb.jpg" alt="">
                            </div>
                        </td>
                        <td>Cáp Lightning MFI 0.9m Anker Select+ A8012</td>
                        <td>27.490.000</td>
                        <td>20.999.000</td>
                        <td>180</td>
                        <td>iphone</td>
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