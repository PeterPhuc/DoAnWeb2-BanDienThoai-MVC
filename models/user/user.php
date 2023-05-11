<?php
    // Kiểm tra kết nối db
    include($_SERVER['DOCUMENT_ROOT'] . '/DoAnWeb2-BanDienThoai-MVC/config/connect.php');
    if(!$conn->connect_error){    //kết nối thành công
        class User {
            function themUser($tentk,$hoten,$sdt,$email,$password,$dob,$avatar,$address,$phanquyen) {
                global $conn;
                $sql = "INSERT INTO khach_hang(tentk, hoten, sdt, email, password, dob, avatar, address, phanquyen) VALUES ('".$tentk."','".$hoten."','".$sdt."','".$email."','".$password."','".$dob."','".$avatar."','".$address."','".$phanquyen."')";

                if (mysqli_query($conn, $sql)) {
                    echo "success";
                } else {
                    echo "non-success";
                }
            }
            function capnhatUser($id,$tentk,$hoten,$sdt,$email,$password,$dob,$avatar,$address) {
                global $conn;
                $sql = "UPDATE khach_hang SET 
                    tentk = '".$tentk."',
                    hoten = '".$hoten."',
                    sdt = '".$sdt."',
                    email = '".$email."',
                    password = '".$password."',
                    dob = '".$dob."',
                    avatar = '".$avatar."',
                    address = '".$address."'
                    WHERE id_kh = '".$id."'
                ";

                if (mysqli_query($conn, $sql)) {
                    echo "success";
                } else {
                    echo "non-success";
                }
            }
            function xoaUser($id) {
                global $conn;
                $sql = "DELETE FROM khach_hang WHERE id_kh = '".$id."' ";
                if (mysqli_query($conn, $sql)) {
                    echo "success";
                } else {
                    echo "non-success";
                }
            }
            function xuatUser() {
                global $conn;
                $sql = "SELECT * FROM khach_hang";

                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        print_r($row);
                        echo '<br><br>';
                    }
                }else{
                    echo 'No result';
                }
            }
            function searchMailPassUser($email, $pass) {
                global $conn;
                $sql = "SELECT * FROM khach_hang 
                        WHERE email = '".$email."' AND password = '".$pass."'
                ";

                $result = $conn->query($sql);
                if($result->num_rows === 1){
                    // while($row = $result->fetch_assoc()) {
                    //     print_r($row);
                    // }
                    return $result->fetch_assoc()['id_kh'];
                }else{
                    return false;
                }
            }
            function searchIDUser($id) {
                global $conn;
                $sql = "SELECT * FROM khach_hang 
                        WHERE id_kh = '".$id."'
                ";

                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        print_r($row);
                    }
                }else{
                    echo 'No result';
                }
            }
        }
    }


    // $user = new User();
    // $user->searchMailPassUser('nvb1505@gmail.com', '123456789');
    // $user->searchIDUser('100000004');
    // echo '<br>';
    // $user->xuatUser();
    // $user->xoaUser('100000004');

    // $user->themUser('Anh D','Trần Văn D','7856212300','tvd@gmail.com','852147369','2000-01-30','default-acc.png','HaNoi VN',1);
    // $user->capnhatUser(100000007,'Anh E','Trần Văn E','7894568520','tve@sgu.edu.vn','00000000','2000-05-30','default-acc.png','DaNang VN');
    // $user->xoaUser('100000004');


    // $conn->close();
?>