<?php
    // $data = json_decode(file_get_contents('php://input'));
    // echo json_encode($data);

    include('../../models/user/user.php');
    global $conn;

    if(isset($_POST['email']) && isset($_POST['pass'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $user = new User();
        $result = $user->searchMailPassUser($email, $pass);
        if($result){
            ini_set("session.cookie_lifetime",60);
            session_name("Customer");
            session_start();
            session_regenerate_id();
            $_SESSION['id_kh'] = $result;
        }else{
            $conn->close();
            $url = '../../views/account/login.php';
            header('location: '. $url);
        }
        $conn->close();

        $url = '../../index.php';
        header('location: '. $url);
    }
?>