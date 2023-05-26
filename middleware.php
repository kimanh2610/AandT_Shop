<?php

    require 'database_connection.php';

    //session_start();
    if(isset($_SESSION['idtv'])){
        $level = 0;
        $check = $_SESSION['idtv'];
        echo $check;
        $sql = "SELECT * FROM tai_khoan WHERE id_user = '$check' AND level ='$level' ";
        $result = $con->query($sql);
        echo $result;
        $row = $result->fetch_assoc();// tra ve mot dong ket qua
        if($con->query($sql) === TRUE){
            header('Location:./customer.php');
        }else{
            header("Location:./admin.php");
        }
    }

?>