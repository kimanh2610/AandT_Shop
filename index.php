<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&T shop</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
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
                    <li class="navbar-items navbar-item-separate" ><a id="text-navbar" href="register.php">Đăng ký</a></li>
                    <li class="navbar-items"><a id="text-navbar" href="login.php">Đăng nhập</a> </li>
                </ul>
            </div>

            <div class="header-search">
                <div class="header-logo">
                    <img src="./img/icons/A & T.jpg" class="logo">
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

       
    <div id="canvas">
        <div class="arrow" ><img id="left" src="./img/icons/left+previous+icon-1320166862746760425_32.png" class="image"></div>
        <div class="arrow" ><img id="right" src="./img/icons/next+right+icon-1320166862802397293_32.png" class="image"></div>
    </div>
    
    <div class="tab-container">
      <div class="tab-header">
            <button class="btn active" data-target-tab="#main">
                <a> <i class=" menu-home-icon fas fa-home" ></i> A&T</a>
            </button>
            <button class="btn " data-target-tab="#dress">
                <a><img src="./img/icons/dress.png"> Đầm</a>
            </button>
            <button class="btn" data-target-tab="#skirt">
                <a><img src="./img/icons/skirt.png"> Váy</a>
            </button>
            <button class="btn" data-target-tab="#tshirt">
                <a><i class=" icons-pro fas fa-tshirt"></i> Áo</a>
            </button>
            <button class="btn" data-target-tab="#trousers">
                <a><img src="./img/icons/trousers.png"> Quần</a>
            </button>
            <button class="btn" data-target-tab="#overalss">
                <a> <img src="./img/icons/overalls.png">  Set</a>
            </button>
      </div>

      <div class="tab-body">
        <div class="tab-content active" id="main">
            <h2 class="title">SẢN PHẨM NỔI BẬT</h2>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/dress/dt.jpg">
                    <h4 >Đầm trắng dự tiệc</h4>
                    
                    <p>195.000đ</p>
                    <a href="detail-product.php" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_no.png">
                    <h4 >Set áo nơ dáng babydoll</h4>
                    
                    <p>129.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/khoac.png">
                    <h4 >Áo khoác thể thao ulzzang 3 sọc </h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/skirt_caro.png">
                    <h4 >Váy chữ A sọc caro</h4>
                    
                    <p>89.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/set/set_tv.png">
                    <h4 >Set áo trễ vai mix chân váy xòe</h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/chiffon.png">
                    <h4 >Áo Chiffon tay dài xếp tầng</h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/tay_baggy2.png">
                    <h4 >Quần tây baggy đi học </h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/babydoll.png">
                    <h4 >Đầm babydoll cổ bèo dễ thương</h4>
                    
                    <p>155.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/dress/maxi.png">
                    <h4 >Đầm xoè maxi dài hoa nhí đi biển </h4>
                    
                    <p>275.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/khuy_lech.png">
                    <h4 >Quần jeans cạp khuy lệch ống suông</h4>
                    
                    <p>200.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/champion.png">
                    <h4 >Áo thun tay ngắn Champion </h4>
                    
                    <p>215.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/somi.png">
                    <h4 >Set váy mix áo gile cá tính</h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        
        <div class="tab-content" id="dress">
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/dress/dt.jpg">
                    <h4 >Đầm trắng dự tiệc</h4>
                    
                    <p>195.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/babydoll.png">
                    <h4 >Đầm babydoll cổ bèo dễ thương</h4>
                    
                    <p>155.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/2tang.png">
                    <h4 >Đầm dự tiệc 2 tầng dây rút</h4>
                    
                    <p>179.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                
                <div class="col-4">
                    <img src="./img/product/dress/body.png">
                    <h4 >Đầm polo dáng ôm body tay ngắn</h4>
                    
                    <p>99.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/dress/maxi.png">
                    <h4 >Đầm xoè maxi dài hoa nhí đi biển </h4>
                    
                    <p>275.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/caro.png">
                    <h4 >Đầm 2 dây caro thời trang mùa hè</h4>
                    
                    <p>148.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/hoa1.png">
                    <h4 >Đầm hoa nhí vintage cổ V nền hoa</h4>
                    
                    <p>159.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/no.png">
                    <h4 >Đầm cổ V thắt nơ phong cách Retro</h4>
                    
                    <p>225.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/dress/det_kim1.png">
                    <h4 >Đầm dệt kim mini cổ tròn xinh xắn </h4>
                    
                    <p>199.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/dress/duoi_ca.png">
                    <h4 >Đầm dự tiệc đuôi cá thời trang</h4>
                    
                    <p>185.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
        </div>

        <div class="tab-content" id="skirt">
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/skirt/skirt_caro.png">
                    <h4 >Váy chữ A sọc caro</h4>
                    
                    <p>89.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/capcao.png">
                    <h4 >Chân váy cạp cao chất liệu kate Ý</h4>
                    
                    <p>230.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/vaybo.png">
                    <h4 >Váy bò chữ kèm đai Quảng Châu</h4>
                    
                    <p>129.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/xeta3.png">
                    <h4 >Chân váy xẻ tà có lót trong</h4>
                    
                    <p>105.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/skirt/cv_hoa.png">
                    <h4 >Chân váy hoa nhí vintage nhiều màu</h4>
                    
                    <p>95.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/cv_dc.png">
                    <h4 >Chân váy bò ngắn đuôi cá</h4>
                    
                    <p>155.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/ren.png">
                    <h4 >Váy ren xếp tầng</h4>
                    
                    <p>119.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/2tang.png">
                    <h4 >Chân váy nữ ngắn xếp ly 2 tầng</h4>
                    
                    <p>98.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/skirt/da_tweed3.png">
                    <h4 >Váy dạ tweed chữ A phong cách Hàn </h4>
                    
                    <p>155.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/xeply.png">
                    <h4 >Chân váy xếp ly chữ A </h4>
                    
                    <p>99.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/skirt/vayphong1.png">
                    <h4 >Chân váy phồng kiểu mới</h4>
                    
                    <p>109.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    
                </div>
            </div>
        </div>
        <div class="tab-content" id="tshirt">
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/tshirt/khoac.png">
                    <h4 >Áo khoác thể thao ulzzang 3 sọc </h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/chiffon.png">
                    <h4 >Áo Chiffon tay dài xếp tầng</h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/tshirt_vl.png">
                    <h4 >Áo sơ mi vạt lệch phối hình siêu cưng</h4>
                    
                    <p>120.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/polo.png">
                    <h4 >Áo dệt kim tay ngắn cổ polo</h4>
                    
                    <p>125.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/tshirt/cadigan.png">
                    <h4 >Áo cadigan tay ngắn len mỏng</h4>
                    
                    <p>215.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/tshirt_jean.png">
                    <h4 >Áo sơ mi jean form rộng</h4>
                    
                    <p>180.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/champion.png">
                    <h4 >Áo thun tay ngắn Champion </h4>
                    
                    <p>215.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/tshirt_caro.png">
                    <h4 >Áo tay ngắn phồng sọc caro</h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/tshirt/theuco2.png">
                    <h4 >Áo len nữ cổ bẻ thêu hoa</h4>
                    
                    <p>139.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/tshirt/tshirt_len.png">
                    <h4 >Áo thun tay ngắn cổ chữ V</h4>
                    
                    <p>123.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                   
                </div>
            </div>
        </div>
        <div class="tab-content" id="trousers">
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/trousers/tay_baggy2.png">
                    <h4 >Quần tây baggy đi học </h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/short_jean.png">
                    <h4 >Quần jean ngắn lưng cao thời trang </h4>
                    
                    <p>98.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/jeans.png">
                    <h4 >Quần jeans lưng cao ống rộng</h4>
                    
                    <p>105.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/jogger.png">
                    <h4 >Quần jogger nữ ống rộng cạp cao</h4>
                    
                    <p>95.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/trousers/short_dui.png">
                    <h4 >Quần đùi đũi dáng váy siêu hot</h4>
                    
                    <p>85.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/jean_rong.png">
                    <h4 >Quần jean ống rộng cài eo</h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/loe.png">
                    <h4 >Quần loe ống rộng siêu hack dáng</h4>
                    
                    <p>139.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/khuy_lech.png">
                    <h4 >Quần jeans cạp khuy lệch ống suông</h4>
                    
                    <p>200.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/trousers/rong_truoc.png">
                    <h4 >Quần ống rộng khóa trước</h4>
                    
                    <p>155.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/trousers/jean_om.png">
                    <h4 >Quần jean nữ lưng cao ôm chân cạp cao</h4>
                    
                    <p>149.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                   
                </div>
                <div class="col-4">
                   
                </div>
            </div>
        </div>
        <div class="tab-content" id="overalss">
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/set/set_tv.png">
                    <h4 >Set áo trễ vai mix chân váy xòe</h4>
                    
                    <p>165.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_soc.png">
                    <h4 >Set áo sơ mi vạt chéo sau+quần short</h4>
                    
                    <p>120.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/setda.png">
                    <h4 >Set dạ bố hàng Quảng Châu</h4>
                    
                    <p>289.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_babydoll.png">
                    <h4 >Set áo babydoll mix quần short</h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/set/set_no.png">
                    <h4 >Set áo nơ dáng babydoll</h4>
                    
                    <p>129.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/somi.png">
                    <h4 >Set váy mix áo gile cá tính</h4>
                    
                    <p>145.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_vest.png">
                    <h4 >Set áo vest và quần đùi kèm áo hai dây</h4>
                    
                    <p>250.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_taydai.png">
                    <h4 >Set nữ dài tay in chữ COMOS</h4>
                    
                    <p>105.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/product/set/kaki2.png">
                    <h4 >Set áo thêu hình mix quần kaki</h4>
                    
                    <p>105.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    <img src="./img/product/set/set_bo.png">
                    <h4 >Set bộ nữ mùa hè dễ thương</h4>
                    
                    <p>135.000đ</p>
                    <a href="#" class="btn-detail">Xem chi Tiết</a>
                    <a href="#" class="btn-detail"><i class="ti-shopping-cart"></i></a>
                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    
                </div>

            </div>
        </div>
      </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <img id="address-img" src="./img/footer/address.png">
                </div>
                <div class="footer-col-2">
                    <h3>Địa chỉ liên hệ</h3>
                    <p>CN1: 56/39 Lê Anh Xuân, Thới Bình, Ninh Kiều, Cần Thơ</p>
                    <p>CN2: 608 đường 30/4, Hưng Lợi, Ninh Kiều, Cần Thơ</p><br>
                    <p>Hotline: 0932738874</p>
                </div>
                
                <div class="footer-col-4">
                    <h3>Theo dõi qua</h3>
                    <ul>
                        <li>Facebook</li><br>
                        <li>Instagram</li><br>

                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright &copy; 2021</p>
        </div>
    </div>

    <script src="./js/qlbh.js"></script>
    <script src="./js/product.js"></script>

</body>
</html>