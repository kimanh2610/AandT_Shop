<?php
    if(isset($_POST['submit_login'])){
        require 'database_connection.php';
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM khach_hang WHERE USER_NAME = '$username' AND PASSWORD = '$pass' AND level = '1'";

        $result = $con->query($sql);
        if($result->num_rows > 0){
            $id = $result->fetch_assoc();
            session_start();
            $_SESSION['USER_NAME'] = $id['KH_MA'];
            header('Location:./index.php');
        }else{
            $sql1 = "SELECT * FROM nhan_vien WHERE USER_NAME = '$username' AND PASSWORD = '$pass' AND level = '0'";
            $result1 = $con->query($sql1);
            if($result1->num_rows > 0){
                $id = $result1->fetch_assoc();
                session_start();
                $_SESSION['admin'] = $id['NV_MA'];
                header('Location:./admin.php');
            }
        }
    }
?>