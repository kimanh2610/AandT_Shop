<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

<?php
    session_start();
    if(isset($_SESSION['admin'])){
        header('Location:./admin.php');
    }
?>
    <div class="main-login">
       
        <div class="login-logo">
            <img src="./img/icons/A & T.jpg" class="logo">
            <a  href="./index.php"><span id="text-logo">Trang chủ</span></a>
        </div>

        <div class="login-form">
            <form action="login_process.php" method="POST">
                <h2>Đăng nhập</h2>
                <p>Tên đăng nhập:</p> 
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập"> <br>
                <p >Mật khẩu:</p> 
                <input type="password" name="password" id="password" placeholder="Mật khẩu"> <br>
                <input type="submit" value="Đăng nhập" name="submit_login" class="btn"><br>
                <br><span>Bạn chưa có tài khoản?</span>
                <a id="text" href="./register.php">Đăng ký ngay</a>
            </form>
        </div>
    </div>
</body>
</html>