<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/detail-product.css">
    <link rel="stylesheet" href="./font-icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./font-icon/fontawesome/css/all.min.css">
</head>
<body>
    <div class="header">
            <div class="header-content">
                <div class="navbar">
                    <ul class="navbar-list">
                        <li class="navbar-item navbar-item-separate">
                            <i class="navbar-icon fas fa-phone"></i>
                            Hotline: 0932738874
                        </li>
                        <li class="navbar-item">
                            <span>Kết nối: </span>
                            <a href="" class="navbar-icon-link">
                                <i class="navbar-icon fab fa-facebook"></i>
                                <i class="navbar-icon fab fa-instagram"></i>
                            </a>    
                        </li>
                    </ul>

                    <ul class="navbar-list">
                        <li class="navbar-items navbar-item-separate">Đăng Ký</li>
                        <li class="navbar-items">Đăng nhập</li>
                    </ul>
                </div>

                <div class="header-search">
                    <div class="header-logo">
                        <img src="./img/icons/A & T.png" class="logo">
                    </div>
                    <div class="search">
                        <div class="search-input-wrap">
                            <input type="text" class="search-input" placeholder="Tìm kiếm...">
                        </div>
                        <button class="search-btn">
                            <i class="search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <div class="cart">
                        <div class="cart-wrap">
                            <i class="cart-icon ti-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container"> -->
        <div class="small-container single-product">
            <h5 id="title"> <a href="./index.php">Trang chủ</a> / <a href="#">Đầm</a> </h5>
            <div class="row">
                
                <div class="col-2">
                    <img id="ProductImg" src="img/product/dress/dt.jpg" width="70%" height="60%" style="margin-left:65px">

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="img/product/dress/dt3.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="img/product/dress/dt1.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="img/product/dress/dt2.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="img/product/dress/dt.jpg" width="100%" class="small-img">
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <form action="" method="post">
                        <h2>[DT001] Đầm trắng dự tiệc</h2>
                        <p><b>Giá:</b> 195000đ</p>
                        <h4>Chi tiết sản phẩm</h4>
                        <p><b>NSX:</b> Việt Nam</p>
                        <p><b>Chất liệu:</b> Chéo Thái</p>
                        <p><b>Mô tả:</b> Thiết kế cổ vuông độc đáo và sang trọng nhưng vô cùng nhẹ nhàng nữ tính <br />
                            Nút ngọc giả sơ mi nhìn tiểu thư cổ điển xen lẫn sự trong sáng dễ thương.
                        </p>
                        <p><b>Màu sắc:</b></p>
                        <div class="colors">
                            <span class="color" color="nude" primary="#ffb8a2"> 
                            <input type="radio" name="radio" id="radio-color"></span>
                            <span class="color" color="white" primary="#fff"> 
                            <input type="radio" name="radio" id="radio-color"></span>
                        
                        </div>
                        <p><b>Kích thước:</b></p>
                        <div class="sizes">
                            <span class="size-text">S</span>
                            <input id="size" type="radio" value="S" name="size">
                            <span class="size-text">M</span>
                            <input id="size" type="radio" value="M" name="size">
                            <span class="size-text">L</span>
                            <input id="size" type="radio" value="L" name="size">
                            <span class="size-text">XL</span>
                            <input id="size" type="radio" value="XL" name="size">
                        </div>
                        <div>
                            <b>Số lượng:</b>
                            <input id="text-btn" type="number" min="1" name="" id="amount" value="1">
                        </div>

                        <a href="#" class="btn-buy"><i class="ti-shopping-cart"> Thêm Giỏ Hàng</i></a>
                        <a href="#" class="btn-detail">Mua Ngay</a>
                    </form>

                </div>    
            </div>

        </div>
    <!-- </div> -->

    <script src="./js/detail.js"></script>
</body>
</html>