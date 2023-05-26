
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


        $sqlEditkm = "SELECT * FROM chi_tiet_khuyen_mai as ct JOIN san_pham as sp ON ct.SP_MA = sp.SP_MA WHERE ct.CTKM_MA = '".$_GET['id'] ."'";
        $resultEditkm = $con->query($sqlEditkm);
        $rowEditkm  = $resultEditkm ->fetch_assoc();

        if(isset($_POST['submit_edit'])){
            $KM_TEN = $_POST['name_promotion'];
            $KM_NGAYBD = $_POST['start_date'];
            $KM_NGAYKT = $_POST['end_date'];
            $CTKM_PHANTRAMKM = $_POST['sale'];//float
            $LOAI_HANG = $_POST['Loai_Hang'];
                      
            $sqlEdit = "UPDATE `chi_tiet_khuyen_mai` SET `SP_MA`='$LOAI_HANG',`CTKM_PHANTRAM`='$CTKM_PHANTRAMKM',`CTKM_TEN`=' $KM_TEN',`CTKM_NGAYBD`='$KM_NGAYBD',`CTKM_NGAYKT`='$KM_NGAYKT' WHERE  CTKM_MA = '".$_GET['id'] ."'";

            if(!$con->query($sqlEdit) ===TRUE){
                echo "<script type='text/javascript'>
                        alert('Khuyến mãi không được cập nhật!');
                        document.location='admin.php';
                    </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert('Khuyến mãi cập nhật thành công!');
                        document.location='admin.php';
                    </script>";
            }
            $con->close();
            
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
        <form action="" method="post">

       
            <div class="tab-container">
                <div class="tab-body">
                    <div class="panel-header">
                        <h3 class="text-heading" >Cập nhật khuyến mãi</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên khuyến mãi</label> <br>
                                <input type="text" name="name_promotion" class="form-control" value="<?php echo $rowEditkm['CTKM_TEN']; ?>" placeholder="Nhập tên khuyến mãi">
                                
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label> <br>
                                <select class='form-control' name='Loai_Hang'>
                                    <option value="<?php echo $rowEditkm['SP_MA']; ?>"> <?php  echo   $rowEditkm['SP_TEN'];?></option>
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
                                <input type="text" name="sale" class="form-control" value="<?php echo $rowEditkm['CTKM_PHANTRAM']; ?>" placeholder="Nhập tỉ lệ khuyến mãi">
                            </div>
                            <div class="form-group">
                                <label>Ngày bắt đầu áp dụng</label> <br>
                                <input type="date" name="start_date" id="" value="<?php echo $rowEditkm['CTKM_NGAYBD']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ngày kết thúc áp dụng</label> <br>
                                <input type="date" name="end_date" id="" class="form-control" value="<?php echo $rowEditkm['CTKM_NGAYKT']; ?>" >
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cập nhật" class="btn-add" name="submit_edit">
                            </div>
                            <a href="./admin.php" class="btn-add">Trở về</a>
                        </form>
                    </div>
                    
                </div>
            </div>

        </form>

        <?php
                
           
        ?>
    </div>

    
</body>
</html>