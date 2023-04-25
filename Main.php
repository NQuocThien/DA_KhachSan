<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./img/iconweb.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel An Giang</title>

    <link rel="stylesheet" href="./css/Grid.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/0f57b9b4e5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
    
    <style>
         * {
        box-sizing: border-box;
      }
      .col {
        text-align: center;
        background-color: #ccc;
        background-clip: content-box;
        margin-top: 8px;
        margin-bottom: 8px;
      }
    </style>
</head>


<body>
    <div id="header" class = "grid">
        <div class="grid wide">
            <div class="menu row">
                <a href="Main.php" id="logo_header" class="logo col l-2 m-2 c-2"><img src="./img/logo.jpg" alt=""></a>
             
                <ul id="menu_nav" class="menu_nav col l-10 m-0 c-0">
                      <a href="">Trang chủ</a>   
                      <a href="">Giới thiệu</a>  
                      <a href="">Khách sạn</a>  
                      <a href="">Dịch vụ</a>  
                      <a href="">Tour</a>  
                      <a href="">Tin tức</a>  
                      <a href="">Khuyến mãi</a>  
                      <a href="">Tuyển dụng</a>  
                      <a href="">Liên hệ</a>  
                </ul>
                <div class="l-0 m-8 c-8 "></div>
                <div class="menu__sub l-0 m-2 c-2">
                    <i class="fa-solid fa-bars menu__sub-icon" ></i>
                </div>
            </div>
        </div>
    </div>
    
    <div id="container" class = "grid">
        <div class="slider l-12 m-12 c-12">
            <i class="fa fa-angle-left slider-prev"></i>
            <ul class="slider-dots">
                <li class="slider-dot-item active" data-index="0"></li>
                <li class="slider-dot-item" data-index="1"></li>
                <li class="slider-dot-item" data-index="2"></li>
                <li class="slider-dot-item" data-index="3"></li>
                <li class="slider-dot-item" data-index="4"></li>
            </ul>
            <div class="slider-wrapper">
                <div class="slider-main">
                <div class="slider-item">
                    <img
                    src="./images/ks1.jpg"
                    alt=""
                    />
                </div>
                <div class="slider-item">
                    <img
                    src="./images/ks2.jpg"
                    alt=""
                    />
                </div>
                <div class="slider-item">
                    <img
                    src="./images/ks3.jpg"
                    alt=""
                    />
                </div>
                <div class="slider-item">
                    <img
                    src="./images/ks4.jpg"
                    alt=""
                    />
                </div>
                <div class="slider-item">
                    <img
                    src="./images/ks5.jpg"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <i class="fa fa-angle-right slider-next"></i>
        </div>
    </div>
    <script src="./Js/starter.js"></script>
    <div class="booking">
        <div class="row row_booking">
            <div class="col l-6">
                <div class="booking__item one_item">
                    <div class="tab_main"><a href="">Đặt phòng ngay</a></div>
                    <div class="tab_item"></div>
                    <div class="tab_content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Họ và tên
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="Full_name" placeholder="">
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Điện thoại
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="phone" placeholder="">
                                    </div>
                                </div>
                                <div class="col l-4 ">
                                    <div class="form_group">
                                        <label for="">Email
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="Email" placeholder="">
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Chi nhánh
                                            <span class="starRed">*</span>
                                        </label>
                                        <select name="" id="select_from">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Khu vực
                                            <span class="starRed">*</span>
                                        </label>
                                        <select name="" id="select_from">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Khách sạn
                                            <span class="starRed">*</span>
                                        </label>
                                        <select name="" id="select_from">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Loại phòng
                                            <span class="starRed">*</span>
                                        </label>
                                        <select name="" id="select_from">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Ngày đến
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="date_den" placeholder="">
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Ngày đi
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="date_di" placeholder="">
                                    </div>
                                </div>
                                <div class="col l-8">
                                    <div class="form_group">
                                        <label for="">Ghi chú
                                            <span class="starRed">*</span>
                                        </label>
                                        <textarea name="" id="textarea_fromG" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col l-4">
                                    <div class="form_group">
                                        <label for="">Số lượng phòng
                                            <span class="starRed">*</span>
                                        </label>
                                        <input type="text" class="form_control" name="_name" id="Full_name" placeholder="">
                                        <input type="submit" value="Đặt phòng" id="submit_datphong">
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div>

            </div>
        </div>
    </div>


    <div id="footer">
    
     
    </div>
</body>
</html>