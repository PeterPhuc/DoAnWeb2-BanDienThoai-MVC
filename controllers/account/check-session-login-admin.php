<?php 
    if(!isset($_SESSION['adminlogin'])){
        $url = '../../views/admin/login-admin.php';
        header('location:' . $url);
    }
?>