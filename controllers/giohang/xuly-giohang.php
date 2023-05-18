<?php
    include('../../models/product-category/product.php');   //Gọi models tương tác bảng Khách hàng
    include('../../models/giohang/giohang.php'); 
    global $conn;

    function showGioHang($id_kh){       
        $cart = new Cart();
        $result = $cart->xuatCart($id_kh);
        echo json_encode($result);
    }
    function themGioHang($id_kh,$id_sp,$soluong,$tongtien,$tensp,$anh_sp){       
        $cart = new Cart();
        $product = new Product();
        $result = $cart->themCart($id_kh,$id_sp,$soluong,$tongtien,$tensp,$anh_sp);
        $result_product = $product->checkSoluongSP($id_sp, $soluong);
        if($result_product == "success" && $result == "success"){
            echo "success";
        }else{
            if($result == 'non-success'){
                echo $result;
            }else{
                echo $result_product;
            }
        }
    }
    function xoaGioHang($id_kh,$id_sp){       
        $cart = new Cart();
        $result = $cart->xoaCart($id_kh,$id_sp);
        echo $result;
    }
    function xoaToanBoGioHang($id_kh){       
        $cart = new Cart();
        $result = $cart->xoaAllCart($id_kh);
        echo $result;
    }
    function updateGioHang($id_kh,$id_sp,$soluong,$tongtien){       
        $cart = new Cart();
        $product = new Product();
        $result = $cart->capnhatCart($id_kh,$id_sp,$soluong,$tongtien);
        $result_product = $product->checkSoluongSP($id_sp, $soluong);
        if($result_product == "success" && $result == "success"){
            echo "success";
        }else{
            if($result == 'non-success'){
                echo $result;
            }else{
                echo $result_product;
            }
        }
    }

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'showCart'){
            if(isset($_GET['id_kh'])){
                $id_kh= $_GET['id_kh'];
                showGioHang($id_kh);
            }
        }
        if($action == 'xoaCart'){
            if(isset($_GET['id_kh']) && isset($_GET['id_sp'])){
                $id_kh= $_GET['id_kh'];
                $id_sp= $_GET['id_sp'];
                xoaGioHang($id_kh, $id_sp);
            }
        }
        if($action == 'xoaAllCart'){
            if(isset($_GET['id_kh'])){
                $id_kh= $_GET['id_kh'];
                xoaToanBoGioHang($id_kh);
            }
        }
        if($action == 'themCart'){
            if(isset($_GET['id_kh']) && isset($_GET['id_sp']) && isset($_GET['soluong'])&& isset($_GET['tongtien'])&& isset($_GET['tensp'])&& isset($_GET['anh_sp'])){
                $id_kh= $_GET['id_kh'];
                $id_sp= $_GET['id_sp'];
                $soluong = $_GET['soluong'];
                $tongtien = $_GET['tongtien'];
                $tensp = $_GET['tensp'];
                $anh_sp = $_GET['anh_sp'];
                themGioHang($id_kh,$id_sp,$soluong,$tongtien,$tensp,$anh_sp);
            }
        }
    }
?>