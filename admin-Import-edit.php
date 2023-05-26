
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nhập hàng</title>
    <link rel="stylesheet" href="./css/add-product.css">
    <link rel="stylesheet" href="./font-icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./font-icon/fontawesome/css/all.min.css">
</head>
<body>

<?php

        require 'database_connection.php';
        $sql ="SELECT * FROM san_pham" ;
        $result = $con->query($sql);

        $sqlMau ="SELECT * FROM mau" ;
        $resultMau = $con->query($sqlMau);

        $sqlSize ="SELECT * FROM size" ;
        $resultSize = $con->query($sqlSize);

        $sqlKho ="SELECT * FROM `kho_hang`" ;
        $resultKho = $con->query($sqlKho);

        $sqlEditNH = "SELECT * FROM chi_tiet_phieu_nhap AS ct 
        JOIN san_pham AS sp ON ct.SP_MA = sp.SP_MA
        JOIN kho_hang AS kh ON ct.K_MA = kh.K_MA
        JOIN size AS s ON ct.S_MA = s.S_MA
        JOIN mau AS m ON ct.M_MA = m.M_MA WHERE ct.CTPN_MA = '".$_GET['id'] ."'";;
        $resultEditNH = $con->query($sqlEditNH);
        $rowEditNH  = $resultEditNH ->fetch_assoc();
        
        if(isset($_POST['submit_edit'])){

            try{
                $nameProduct = $_POST['name_product'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $size = $_POST['size'];
                $color = $_POST['color'];
                $warehouse = $_POST['warehouse'];
                
            
    
                $sqlNH ="UPDATE `chi_tiet_phieu_nhap` SET `K_MA`='$warehouse',`M_MA`='$color',`S_MA`='$size',`SP_MA`='$nameProduct',`CTPN_SOLUONG`='$quantity',`CTPN_DONGIA`='$price' WHERE CTPN_MA = '".$_GET['id'] ."'";
    
                if(!$con->query($sqlNH) ===TRUE){
                    echo "<script type='text/javascript'>
                            alert('Cập nhật nhập hàng không thành công!');
                            document.location='admin.php';
                        </script>";
                }else{
                    echo "<script type='text/javascript'>
                            alert('Cập nhật nhập hàng thành công!');
                            document.location='admin.php';
                        </script>";
                }   
            }catch(PDOException $e){
                printf($e->getMessage());
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
        <form action="" method="post">

       
            <div class="tab-container">
                <div class="tab-body">
                    <div class="panel-header">
                        <h3 class="text-heading" >Cập nhật nhập hàng</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <label>Tên sản phẩm:</label> <br>
                                <select class='form-control' name='name_product'>
                                <option value="<?php echo $rowEditNH['SP_MA']; ?>"> <?php  echo   $rowEditNH['SP_TEN'];?></option>
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
                                <label for="quantity">Chọn số lượng:</label>
                                <input type="number" id="quantity" name="quantity" value= "<?php echo $rowEditNH['CTPN_SOLUONG']; ?>" min="1" max="100">
                            </div>

                            <div class="form-group">
                                <label>Giá nhập:</label> <br>
                                <input type="text" name="price" class="form-control" value= "<?php echo $rowEditNH['CTPN_DONGIA']; ?>" placeholder="Giá nhập sản phẩm">
                            </div>

                            <div class="form-group">
                                <label>Size sản phẩm:</label> <br>
                                <select class='form-control' name='size'>
                                <option value="<?php echo $rowEditNH['S_MA']; ?>"> <?php  echo   $rowEditNH['S_TEN'];?></option>
                                    <?php 
                                // echo " <select class='form-control'>";
                                        while($rowSize= $resultSize->fetch_assoc()){
                                            echo " <option value=". $rowSize['S_MA'] .">";
                                            echo   $rowSize['S_TEN'];
                                            echo " </option>" ; 
                                        }
                                    
                                    ?>
                                </select>
                            </div>
                                                   
                            <div class="form-group">
                                <label>Màu sản phẩm:</label> <br>
                                <select class='form-control' name='color'>
                                    <option value="<?php echo $rowEditNH['M_MA']; ?>"> <?php  echo   $rowEditNH['M_TEN'];?></option>
                                    <?php 
                                // echo " <select class='form-control'>";
                                        while($rowMau= $resultMau->fetch_assoc()){
                                            echo " <option value=". $rowMau['M_MA'] .">";
                                            echo   $rowMau['M_TEN'];
                                            echo " </option>" ; 
                                        }
                                      
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kho hàng:</label> <br>
                                <select class='form-control' name='warehouse'>
                                <option value="<?php echo $rowEditNH['K_MA']; ?>"> <?php  echo   $rowEditNH['K_TEN'];?></option>
                                    <?php 
                                // echo " <select class='form-control'>";
                                        while($rowKho = $resultKho->fetch_assoc()){
                                            echo " <option value=". $rowKho['K_MA'] .">";
                                            echo   $rowKho['K_TEN'];
                                            echo " </option>" ; 
                                        }
                                      
                                    ?>
                                </select>
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
    </div>

    
</body>
</html>