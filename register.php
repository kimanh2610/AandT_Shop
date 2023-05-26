<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="main-signup" >
        <div class="login-logo">
            <img src="./img/icons/A & T.jpg" class="logo">
            <a  href="./index.php"><span id="text-logo">Trang chủ</span></a>
        </div>
        <form action="register_process.php" method="post" onsubmit="return check_send();">
            <div class="form">
                <h2>Đăng ký</h2>
                <div class="register">
                    <table>
                        <td class="register_text">Họ và tên:</td>
                        <td><input type="text" name="fullName" id="fullName" placeholder="Nhập họ và tên" >
                            <br><span class="text-error" id="errorFN"></span>
                        </td>
                        
                    </table>
                </div>
                <div class="register" >
                    <table>
                        <td class="register_text">Tên đăng nhập:</td>
                        <td><input onclick="userName()" type="text" name="userName"  id= "userName" placeholder="Nhập tên đăng nhập">
                            <br><span class="text-error" id="errorUser"></span>
                        </td>
                        
                    </table>
                </div>
                <div class="register" class="password">
                    <table>
                        <td class="register_text">Mật khẩu:</td>
                        <td><input type="password" name="password" id="userPass" placeholder="Nhập mật khẩu">
                            <br><span class="text-error" id="errorPass"></span>
                        </td>
                        
                    </table>
                </div>
                <div class="register" class="password">
                    <table>
                        <td class="register_text">Nhập lại mật khẩu:</td>
                        <td><input type="password" id="rePass" placeholder="Nhập lại mật khẩu">
                            <br><span class="text-error" id="errorPw"></span>
                        </td>
                        
                    </table>
                </div>
                
                <div class="register">
                    <table>
                        <td class="register_text">Email: </td>
                        <td><input type="email" name="email" id="email"  placeholder="Nhập email">
                            <br><span class="text-error" id="errorEmail"></span>
                        </td>
                        
                    </table>
                </div>
                <div class="register">
                    <table>
                        <td class="register_text">Số điện thoại:</td>
                        <td><input type="text" name="phone" id="phone" placeholder="Nhập số điện thoại">
                            <br><span class="text-error" id="errorPhone"></span>
                        </td>
                        
                    </table>
                </div>
                <div class="register">
                    <table>
                        <td class="register_text">Địa chỉ:</td>
                        <td><input type="text" name="address" id="address" placeholder="Nhập địa chỉ">
                            <br><span class="text-error" id="errorAddress"></span>
                        </td>
                    </table>
                </div>
                <input onclick="result()" type="submit" value="Đăng ký" name="submit_register" class="btn"></input>
                <br><span>Bạn đã có tài khoản?</span>
                <a id="text" href="./login.php">Đăng nhập</a>
                
            </div>
    
        </form>

    </div>
    <!-- <script src="./js/signup.js"></script> -->
    </div>
</body>
</html>