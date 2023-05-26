
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
        $sql ="SELECT * FROM san_pham" ;
        $result = $con->query($sql);

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
        <form action="" method="post">

       
            <div class="tab-container">
                <div class="tab-body">
                    <div class="panel-header">
                        <h3 class="text-heading" >Thêm mới khuyến mãi</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên khuyến mãi</label> <br>
                                <input type="text" name="name_promotion" class="form-control" placeholder="Nhập tên khuyến mãi">
                                
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label> <br>
                                <select class='form-control' name='Loai_Hang'>
                                    <option>---Chọn tên sản phẩm---</option>
                                    <?php 
                                // echo " <select class='form-control'>";
                                        while($row= $result->fetch_assoc()){
                                            echo " <option value=". $row['SP_MA'] .">";
                                            echo   $row['SP_TEN'];
                                            echo " </option>" ; 
                                        }
                                        $result->free();
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label >Phần trăm khuyến mãi mãi</label> <br>
                                <input type="text" name="sale" class="form-control" placeholder="Nhập tỉ lệ khuyến mãi">
                            </div>
                            <div class="form-group">
                                <label>Ngày bắt đầu áp dụng</label> <br>
                                <input type="date" name="start_date" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày kết thúc áp dụng</label> <br>
                                <input type="date" name="end_date" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Thêm" class="btn-add" name="submit_add">
                            </div>
                            <a href="./admin.php" class="btn-add">Trở về</a>
                        </form>
                    </div>
                    
                </div>
            </div>

        </form>
    </div>

    <?php
        

        if(isset($_POST['submit_add'])){
            $KM_TEN = $_POST['name_promotion'];
            $KM_NGAYBD = $_POST['start_date'];
            $KM_NGAYKT = $_POST['end_date'];
            $CTKM_PHANTRAMKM = $_POST['sale'];//float
            $LOAI_HANG = $_POST['Loai_Hang'];
            $sqlKhuyenMai = "INSERT INTO `chi_tiet_khuyen_mai` (`SP_MA`, `CTKM_PHANTRAM`, `CTKM_TEN`, `CTKM_NGAYBD`, `CTKM_NGAYKT`) VALUES ('$LOAI_HANG', '$CTKM_PHANTRAMKM', ' $KM_TEN', '$KM_NGAYBD', '$KM_NGAYKT')";
    
            if(!$con->query($sqlKhuyenMai) ===TRUE){
                echo "<script type='text/javascript'>
                        alert('Thêm khuyến mãi không thành công!');
                        document.location='admin-add-promotion.php';
                    </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert('Thêm khuyến mãi thành công!');
                        document.location='admin-add-promotion.php';
                    </script>";
            }
               
            
        }
    ?>

    
</body>
</html>