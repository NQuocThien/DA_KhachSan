<?php
	include_once "../cauhinh.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="../css/Grid.css">
    <link rel="stylesheet" href="../css/new.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/0f57b9b4e5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header" class = "grid">
        <div class="grid wide">
            <div class="menu row">
                <a href="Main.php" id="logo_header" class="logo col l-2 m-2 c-2"><img src="../img/logo.jpg" alt=""></a>         
                <ul id="menu_nav" class="menu_nav col l-10 m-0 c-0">
                    <a href="../Main.php">Trang chủ</a>   
                    <a href="">Giới thiệu</a>  
                    <a href="../menu/hotel.php">Khách sạn</a>  
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
    <div class="main_banner">
        <img src="../images/ks1.jpg" alt="">
    </div>
    <div class="main">
        <div class="">
            <ul>
                <li><a href="">Trang chủ</a>
                    <span></span>
                </li>
                <li>
                    <a href="">Khách Sạn</a>
                    <span></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="list_new grid wide">
        <div class="row">
            <div class="l-2">
                <div class="list_cd">
                    <h3> DS chu de</h3>
                        <?php
                            $sql = "select * from chude";
                            $danhsach = $connect->query($sql);
                            //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
                            if (!$danhsach) {
                                die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
                                exit();
                            }
                            while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
                            {
                                echo "<a href='index.php?do=baiviet_chude&id=".$row['MaChuDe']."'>".$row['TenChuDe']."</a> " ;
                            }
                        ?>
                    </div>
            </div>
            <div class="l-8">
                <?php
                    $do = isset($_GET['do']) ? $_GET['do'] : "home";
                    include $do . ".php";
                ?>
                
            </div>
            <div class="l-2">
                
            </div>
        </div>

    </div>
    <!-- Footer -->
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