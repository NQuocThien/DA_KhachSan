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
            <div class="col l-6">
                <div class="booking__item two_item">
                    <div class="booking_header">
                        <h3 class="title_box">Tin tức nổi bật</h3>
                    </div>
                    <div class="bookingbody">
                        <div class="media row">
                            <div class="media_img col l-4"><img src="" alt=""></div>
                            <div class="media_body col l-8">
                                <h5>Khách sạn Mializa Hotel là chuỗi khách sạn tình yêu được phân bổ trên toàn thủ đô Hà nội</h5>
                                <p>Khách sạn MiaLiza  Hotel là chuỗi khách sạn tình yêu được phân bổ trên toàn thủ đô Hà nội </p>
                            </div>
                        </div>
                        <div class="intro_genar row">
                            
                            <a href="" class="col l-12">
                                <i class="fa-solid fa-check"></i>
                                <span>Vẻ đẹp của mùa thu Hà Nội khiến bao người lưu luyến</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>

    <!-- // intro_branch -->
    <div class="intro_branch grid wide">
        <h2 class="_title fronText">HỆ THỐNG CHI NHÁNH KHÁCH SẠN AGU</h2>
        <div class="grid wide">
            <div class="row">
                <div class = "col l-4 m-4 c-12">

                    <div class="warpCard">
                        <div class="card_img">
                            <img src="./images/ksn1.jpg" class = "l-12"alt="
                            " alt="">
                        </div>
                        <div class="card_title l-12 m-12 c-12 ">
                            <a href="" class ="fronText">Khách sạn ở hai Bà Trưng</a>
                        </div>
                        <div class="card_body fronText">
                            <p>Khách sạn mang phong cách nhẹ nhàn yên tĩnh</p>
                            <div class="btn">
                                <a href="" class="fronText">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col l-4 m-4 c-12">

                    <div class="warpCard">
                        <div class="card_img">
                            <img src="./images/ksn1.jpg" class = "l-12"alt="
                            " alt="">
                        </div>
                        <div class="card_title l-12 m-12 c-12 ">
                            <a href="" class ="fronText">Khách sạn ở hai Bà Trưng</a>
                        </div>
                        <div class="card_body fronText">
                            <p>Khách sạn mang phong cách nhẹ nhàn yên tĩnh</p>
                            <div class="btn">
                                <a href="" class="fronText">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


      
    <div class="hotel-highlights grid wide  ">
        <h2 class="_title fronText">KHÁCH SẠN NỔI BẬT</h2>
        <P class = "sub-title fronText">Một số khách sạn nổi bật của AGU</P>
            <div class="grid wide">
                <div class="row">
                    <div class = "col l-3 m-3 c-12">

                        <div class="warpCard">
                            <div class="card_img">
                                <img src="./images/ksn1.jpg" class = "l-12"alt="
                                " alt="">
                            </div>
                            <div class="card_title l-12 m-12 c-12 ">
                                <a href="" class ="fronText">Khách sạn ở hai Bà Trưng</a>
                            </div>
                            <div class="card_body fronText">
                                <p>Xếp loại: </p>
                                <p>Địa chỉ: </p>
                                <p>Liên hệ: </p>
                                <div class="btn btn1">
                                    <a href="" class="fronText">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class = "col l-3 m-3 c-12">

                        <div class="warpCard">
                            <div class="card_img">
                                <img src="./images/ksn1.jpg" class = "l-12"alt="
                                " alt="">
                            </div>
                            <div class="card_title l-12 m-12 c-12 ">
                                <a href="" class ="fronText">Khách sạn ở hai Bà Trưng</a>
                            </div>
                            <div class="card_body fronText">
                                <p>Xếp loại: </p>
                                <p>Địa chỉ: </p>
                                <p>Liên hệ: </p>
                                <div class="btn btn1">
                                    <a href="" class="fronText">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class = "col l-3 m-3 c-12">

                        <div class="warpCard">
                            <div class="card_img">
                                <img src="./images/ksn1.jpg" class = "l-12"alt="
                                " alt="">
                            </div>
                            <div class="card_title l-12 m-12 c-12 ">
                                <a href="" class ="fronText">Khách sạn ở hai Bà Trưng</a>
                            </div>
                            <div class="card_body fronText">
                                <p>Xếp loại: </p>
                                <p>Địa chỉ: </p>
                                <p>Liên hệ: </p>
                                <div class="btn btn1">
                                    <a href="" class="fronText">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    
        <div class="service grid wide">
            <h2 class="title">
                DỊCH VỤ - TIỆN NGHI
            </h2>
            <P class="title-sub">Dịch vụ nhà hàng, karaoke, coffee, phòng họp,... tại MIA Hotel</P>
        <div class="row">
            
            <div class="col l-3">
                <div class="tap_service_mains">
                    <a class="tap_service-item active"  href="#">GYM</a>
                    <a class="tap_service-item " href="#">VISA</a>
                    <a class="tap_service-item " href="#">Dịch Vụ Phòng Hộp</a>
                    <a class="tap_service-item " href="#">Thuê Xe</a>
                    <a class="tap_service-item " href="#">Nhà Hàng</a> 
                </div>
               
        </div>
        <div class="col l-9">
            <div class="tap_service_contains ">
                <div class="contains_item active">
                    <div class="row">
                        <div class="item-img col l-4">
                            <img src="./images/gym.jpg" alt="">
                        </div>
                        <div class="item_body col l-8">
                            
                            <h3 class="title fronText">
                                GYM
                            </h3>
                            <p class="content fronText">
                                Một phòng tập thể dục năng động với trang thiết bị công nghệ cao để căng cơ và thư giãn trong phòng xông hơi và tháp Jacuzzi để bắt đầu và kết thúc một ngày bận rộn. Phòng Tập Thể Hình GYM  tại ROSALIZA INTERNATIONAL HOTEL với trang Thiết Bị Chuyên Nghiệp Đạt Chuẩn 100% USA . 
                            </p>
                            <a class = "btn fronText" >Xem thêm</a>
                        </div>
                    </div>
                </div>
                <!-- visa -->
                <div class="contains_item ">
                    <div class="row">
                        <div class="item-img col l-4">
                            <img src="./images/visa.jpg" alt="">
                        </div>
                        <div class="item_body col l-8">
                            <h3 class="title fronText">
                            VISA
                            </h3>
                            <p class="content fronText">
                            What is a `Visa on Arrival?: this is most likely the easiest way to obtain your visa without having to chase down embassies, consulates and the like prior to your trip, and is a valid alternative when applying for a tourist visa.
                            </p>
                            <a class = "btn fronText" >Xem thêm</a>
                        </div>
                    </div>
                </div>
                <!-- phòng hộp -->
                <div class="contains_item ">
                    <div class="row">
                        <div class="item-img col l-4">
                            <img src="./images/phonghop.jpg" alt="">
                        </div>
                        <div class="item_body col l-8">
                            <h3 class="title fronText">
                            Dịch Vụ Phòng họp
                            </h3>
                            <p class="content fronText">
                            You come to Hanoi to prepare for an event and to find a place to rent meeting rooms, meeting with partners to completely eliminate a job to find a venue for this important event at Rosaliza Hotel. Guests can rent a meeting room at the hotel you will really feel satisfied by all that Rosaliza brings. A luxurious design style, friendly reception space,
                            </p>
                            <a class = "btn fronText" >Xem thêm</a>
                        </div>
                    </div>
                </div>
                <!-- Thuê xe  -->
                <div class="contains_item ">
                    <div class="row">
                        <div class="item-img col l-4">
                            <img src="./images/visa.jpg" alt="">
                        </div>
                        <div class="item_body col l-8">
                            <h3 class="title fronText">
                            Thuê xe
                            </h3>
                            <p class="content fronText">
                            - Dịch vụ thuê xe oto và xe máy đi theo ngày <br>
                            - Dịch vụ thuê xe đón Nội Bài về khách sạn và từ khách sạn đi Nội Bài
                            </p>
                            <a class = "btn fronText" >Xem thêm</a>
                        </div>
                    </div>
                </div>
                <!-- Nhà hàng -->
                <div class="contains_item ">
                    <div class="row">
                        <div class="item-img col l-4">
                            <img src="./images/nhahang.jpg" alt="">
                        </div>
                        <div class="item_body col l-8">
                            <h3 class="title fronText">
                            Nhà hàng
                            </h3>
                            <p class="content fronText">
                            Nhà hàng Rosaliza  thuộc Khách sạn Rozaliza Hà Nội  có vị trí tại tầng 3 trong khuôn viên khách sạn cao 14 tầng nhà hàng chuyên phục vụ các món ăn Âu, Á, và truyền thống Việt Nam trong một bầu không khí sang trọng, ấm cúng có không gian nhìn ra con phố cổ Trần Quốc Toản.
                            </p>
                            <a class = "btn fronText" >Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./Js/tabService.js"></script>
    </div>
        </div>
    








        <!-- Footter -->
      <footer>
        <div class="container">
            <div class="row">
                <div class="col l-4">
                    <div class="footer_name">
                        <h3 class="title">Thông tin liên hệ</h3>
                        <div class="address">
                            <span >AGU HoTel</span>
                            <p>Địa chỉ: 12/a,Long Xuyên, An Giang</p>
                            <p>Điện thoại: 0123456789</p>
                            <p>Hotline: 09090909</p>
                            <p>Email: aguhotel@gmail.com</p>
                            <p>Website: </p>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="footer_name">
                        <h3 class="title">Thông tin liên hệ</h3>
                        <ul class="menu_footer">
                            <li><a href="">GYM</a></li>
                            <li><a href="">VISA</a></li>
                            <li><a href="">PHÒNG HỌP</a></li>
                            <li><a href="">NHÀ HÀNG</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="footer_name">
                        <h3 class="title">Thông tin liên hệ</h3>
                        <div class="form_submit">
                            <input type="text" placeholder="Enter your Email">
                            <a href="" class=" buton btn_footer">Đăng ký</a>
                        </div>
                        <div class="list_icon_mxh">
                            <div class="icon_item"><a href=""><span><i class="fa-brands fa-facebook"></i></span></a></div>
                            <div class="icon_item"><a href=""><span><i class="fa-brands fa-instagram"></i></span></a></div>
                            <div class="icon_item"><a href=""><span><i class="fa-brands fa-youtube"></i></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col l-12 end_footer">
                     <p>Copyright AGU Hotels | Design by aguhotel.vn</p>
                        
                </div>
            </div>
        </div>
      </footer>
</body>
</html>