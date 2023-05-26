
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
        //session_start();
       
         
        // require 'database_connection.php';
        // session_start();
        $sql ="SELECT * FROM loai_san_pham" ;
        $result = $con->query($sql);      

        $sqlNSX = "SELECT * FROM nha_san_xuat";
        $resultNSX = $con->query($sqlNSX);
        
        $sqlEditSP= "SELECT sp.SP_TEN ,sp.SP_ANH, lsp.LH_TEN,lsp.LH_MA,nsx.NSX_MA, nsx.NSX_TEN, sp.SP_GIA
        FROM san_pham AS sp
             INNER JOIN loai_san_pham as lsp ON  lsp.LH_MA = sp.LH_MA 
             INNER JOIN nha_san_xuat as nsx ON nsx.NSX_MA = sp.NSX_MA 
        WHERE sp.SP_MA = '".$_GET['id'] ."'";
        $resultEditSP = $con->query($sqlEditSP);
        $rowEditSP  = $resultEditSP ->fetch_assoc();

      
        if(isset($_POST['submit_edit'])){
            $tenSp = $_POST['name_product'];
            $LH = $_POST['Loai_Hang'];//loai san pham
            $NSX = $_POST['Nha_San_Xuat'];
            $Gia = $_POST['price'];
            $anh = $_FILES['imgProduct']['name'];
            $tmp_anh = $_FILES['imgProduct']['tmp_name'];
    
       
            if($tmp_anh == '' && $anh == ''){
                $sqlSP = "UPDATE san_pham SET SP_TEN='$tenSp',`LH_MA`='$LH',`NSX_MA`='$NSX',`SP_GIA`='$Gia' WHERE SP_MA = '".$_GET['id'] ."'";
            }else{
                move_uploaded_file($tmp_anh, "./public/SanPham/$anh");
                $sqlSP = "UPDATE san_pham SET SP_TEN='$tenSp',`SP_ANH`='$anh',`LH_MA`='$LH',`NSX_MA`='$NSX',`SP_GIA`='$Gia' WHERE SP_MA = '".$_GET['id'] ."'";
            }
            if($con->query($sqlSP) === TRUE){             
                echo "<script type='text/javascript'>
                            alert('Cập nhật sản phẩm thành công!');
                            document.location='admin.php';
                        </script>";
            }else{
                echo "<script type='text/javascript'>
                            alert('Cập nhật sản phẩm không thành công!');
                            document.location='=admin.php';
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
                    <h3 class="text-heading" >Thêm mới sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label> <br>
                            <input type="text" name="name_product" value="<?php echo $rowEditSP['SP_TEN']; ?>" class="form-control" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm</label> <br>
                            <select class='form-control' name='Loai_Hang'>
                            <option value="<?php echo $rowEditSP['LH_MA']; ?>"> <?php  echo   $rowEditSP['LH_TEN'];?></option>
                                <?php 
                               // echo " <select class='form-control'>";
                                    while($row = $result->fetch_assoc()){
                                        echo " <option value=". $row['LH_MA'] .">";
                                        echo   $row['LH_TEN'];
                                        echo " </option>" ;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Ảnh</label> <br>
                            <input type="file" name="imgProduct"  placeholder="" id="img" value="<?php echo $rowEditSP['SP_ANH']; ?>">
   
                        </div>
                        <div class="form-group">
                            <label >Nhà sản xuất</label> <br>
                            <select class='form-control' name='Nha_San_Xuat'>
                                <option value="<?php echo $rowEditSP['NSX_MA']; ?>"><?php  echo   $rowEditSP['NSX_TEN'];?></option>
                                <?php 
                               // echo " <select class='form-control'>";
                                    while($rowNSX = $resultNSX->fetch_assoc()){ 
                                        echo " <option value=". $rowNSX['NSX_MA'] .">";
                                        echo   $rowNSX['NSX_TEN'];
                                        echo " </option>" ;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Giá</label> <br>
                            <input type="text" name="price" class="form-control"  value="<?php echo $rowEditSP['SP_GIA']; ?>"placeholder="Nhập giá">
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