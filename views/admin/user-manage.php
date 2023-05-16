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
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    const table = document.querySelector('.table-container');
    const tbody = table.querySelector('tbody');

    $.ajax({
            url: 'controllers/user/xuly-user.php',
            method: "POST",
            data: {
                'action': 'getAll'
            }
    }).done(function(data) {
        if(data != 'fail'){
            let dataParser = JSON.parse(data);
            console.log(dataParser);
            let stringHTML = dataParser.map(function(item, index){
                return `<tr>
                            <td>${item['id_kh']}</td>
                            <td class="img">
                                <div class="wrapper">
                                    <img src="assets/images/uploads/customer-avatar/${item['avatar']}" alt="">
                                </div>
                            </td>
                            <td class="wrap-text">${item['tentk']}</td>
                            <td class="td-padding">${item['hoten']}</td>
                            <td>${item['sdt']}</td>
                            <td class="wrap-text">${item['email']}</td>
                            <td class="wrap-text">${item['address']}</td>
                            <td class="ctrl" style="width: min-content">
                                <div class="btn">
                                    <button type="button" class="btn btn-primary delete-item" onclick="sua(this)">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger delete-item" onclick="xoa(this)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>`;
            });
            tbody.innerHTML = stringHTML.join('');
        }else{
            console.log('Lỗi');
        }
    });

    function xoa(btn) {
        console.log(btn);
    }
    function sua(btn) {
        console.log(btn);
    }
</script>