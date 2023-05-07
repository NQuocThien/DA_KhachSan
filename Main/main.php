<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Grid.css">
    <link rel="stylesheet" href="../css/infouser.css">
    <link rel="stylesheet" href="../css/mainuser1.css">
    <link rel="stylesheet" href="../css/quanlyroom.css">
    <link rel="stylesheet" href="../css/doimatkhau.css">
    <link rel="stylesheet" href="../css/quanlyloaiphong.css">
    <link rel="stylesheet" href="../css/infouser.css">
    <link rel="stylesheet" href="../css/manager_hotel.css">

    <script src="https://kit.fontawesome.com/0f57b9b4e5.js" crossorigin="anonymous"></script>

    <script src="../handle/jquery-1.8.0.min.js"></script>

</head>
    <?php 

        session_start();
        include "../Chung/cauhinh.php";
        if(isset($_SESSION['MaND'])){
    ?>
<body>
 
<div class="header grid">
    <div class="tasbars row no-gutters">
        <div class="col l-2 header_logo">
            <header class="logo">
               <a href="mainuser.php" style="  color: #fff;" > Hotel AGU</a>
            </header>
        </div>
        <div class="col l-10 header_main">
            <div class="header_user" >
                <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user" >
                <div class="menu_user">
                    <ul>
                        <a href="main.php?do=infouser">Thông tin cá nhân</a>
                        <a href="main.php?do=dangxuat">Đăng xuất</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body row no-gutters">
        <div class="col l-2 navigation">
            <div class="avatar" >
                <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user_table" > 
                <span><?php echo$_SESSION['HoTen']?></span>
            </div>
            <div id="myList" class="row no-gutters">
                <a class="col l-12 active" data-target="user.php?do=user">Danh Sách Người Dùng</a>
                <a class="col l-12"data-target="quanlyroom.php?do=quanlyroom">Quản lý phòng</a>
                <a class="col l-12"data-target="quanlyloaiphong.php?do=quanlyloaiphong">Quản lý Khách sạn</a>
                <a class="col l-12"data-target="quanlyloaiphong.php?do=quanlyloaiphong">Quản lý đặt phòng</a>
                <a class="col l-12"data-target="quanlyloaiphong.php?do=quanlyloaiphong">Quản lý loại phòng</a>
                <a class="col l-12"data-target="quanlyloaiphong.php?do=quanlyloaip  hong">Quản lý tin tức</a>
            </div>
            <!-- <script src="../Js/mainuser.js"></script> -->
        </div>
        <div class="col l-10 container" id="container">
            <?php
                $do = isset($_GET['do']) ? $_GET['do'] : "user";
                include $do.".php";
            ?>
        </div>
        <script src="../Js/mainuser.js"></script>
    </div>
    
</div>
<?php } else header("Location: login.php");?>
</body>
</html>