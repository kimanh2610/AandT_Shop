
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới nhập hàng</title>
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
        
        if(isset($_POST['submit_add'])){

            try{
                $nameProduct = $_POST['name_product'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $size = $_POST['size'];
                $color = $_POST['color'];
                $warehouse = $_POST['warehouse'];

                // echo $nameProduct;
                // echo  $quantity;
                // echo $price;
                // echo $size;
                // echo $color;
                // echo $warehouse;
    
                $sqlNH ="INSERT INTO `chi_tiet_phieu_nhap`( `K_MA`, `M_MA`, `S_MA`, `SP_MA`, `CTPN_SOLUONG`, `CTPN_DONGIA`) VALUES ('$warehouse','$color','$size','$nameProduct','$quantity','$price')";
    
                if(!$con->query($sqlNH) ===TRUE){
                    echo "<script type='text/javascript'>
                            alert('Thêm mới nhập hàng không thành công!');
                            document.location='admin-Import-add.php';
                        </script>";
                }else{
                    echo "<script type='text/javascript'>
                            alert('Thêm mới nhập hàng thành công!');
                            document.location='admin-Import-add.php';
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
                        <h3 class="text-heading" >Thêm mới nhập hàng</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <label>Tên sản phẩm:</label> <br>
                                <select class='form-control' name='name_product'>
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
                                <label for="quantity">Chọn số lượng:</label>
                                <input type="number" id="quantity" name="quantity" min="1" max="100">
                            </div>

                            <div class="form-group">
                                <label>Giá nhập:</label> <br>
                                <input type="text" name="price" class="form-control" placeholder="Giá nhập sản phẩm">
                            </div>

                            <div class="form-group">
                                <label>Size sản phẩm:</label> <br>
                                <select class='form-control' name='size'>
                                    <option>---Chọn size sản phẩm---</option>
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
                                    <option>---Chọn màu sản phẩm---</option>
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
                                    <option>---Chọn kho hàng sản phẩm---</option>
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
                                <input type="submit" value="Thêm" class="btn-add" name="submit_add">
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