
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="./css/add-product.css">
    <link rel="stylesheet" href="./font-icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./font-icon/fontawesome/css/all.min.css">
</head>
<body>

<?php

    require 'database_connection.php';
    $sql = "SELECT * FROM kho_hang Where K_MA = '".$_GET['id'] ."'";
    $resultEditKho = $con->query($sql);
    $rowEditKho = $resultEditKho ->fetch_assoc();

    if(isset($_POST['submit_edit'])){
        $ten = $_POST['name_warehouse'];
        $DC = $_POST['address'];

        $sqlKho = "UPDATE kho_hang SET K_TEN='$ten',K_DIACHI='$DC' WHERE K_MA = '".$_GET['id'] ."'";

        if($con->query($sqlKho) === TRUE){

            echo "<script type='text/javascript'>
                        alert('Cập nhật kho mới thành công!');
                        document.location='admin.php';
                    </script>";
        }else{
            echo "<script type='text/javascript'>
                        alert('Cập nhật kho không thành công!');
                        document.location='admin.php';
                    </script>";
        }

    }
      

?>
    
    <div class="wrapper">
        <div class="header-tab">
            <ul class="navbar-list">
                <li class="navbar-item ">
                    <img src="./img/icons/A & T.jpg" id="logo">    
                </li>
            </ul>

          
        </div>
        <div class="back-main">
            <a href="./admin.php" class="text-main"><i class="fas fa-bars"></i> Trang Chủ</a> 
        </div>
        <div class="tab-container">
            <div class="tab-body">
                <div class="panel-header">
                    <h3 class="text-heading" >Thêm mới kho</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên kho</label> <br>
                            <input type="text" name="name_warehouse" class="form-control"  value="<?php echo $rowEditKho['K_TEN']; ?>"  placeholder="Nhập tên kho">
                        </div>
                     
                        <div class="form-group">
                            <label >Địa chỉ</label> <br>
                            <input type="text" name="address" class="form-control" value="<?php echo $rowEditKho['K_DIACHI']; ?>"  placeholder="Nhập địa chỉ kho">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Cập nhật" class="btn-add" name="submit_edit">
                        </div>
                        <a href="./admin.php" class="btn-add">Trở về</a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    
</body>
</html>