<?php

    if(isset($_POST['submit_register'])){

        require 'database_connection.php';
    
        $fullname = $_POST['fullName'];
        $username = $_POST['userName'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sql = "INSERT INTO khach_hang (USER_NAME, PASSWORD, KH_TEN, KH_DIACHI, KH_SDT, KH_EMAIL, level )
                VALUES ('$username', '$pass', '$fullname', '$address', '$phone', '$email', '1' )";

        if(!$con->query($sql)===TRUE){
            echo "<script type='text/javascript'>
                    alert('Đăng ký không thành công!');
                    document.location='register.php'
                </script>";
        }
        else{
            header('Location:./login.php');
        }
    }
?>