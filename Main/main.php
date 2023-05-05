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
    <link rel="stylesheet" href="../css/infouser.css">
    <?php 

        session_start();
    ?>

</head>
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
                        <a href="mainuser.php?do=infouser">Thông tin cá nhân</a>
                        <a href="#">Đăng xuất</a>
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
            <ul id="myList" >
                    <li class="li_mylist">
                        <a href="main.php?do=user">Danh Sách Người Dùng</a>
                    </li>
                    <li class="li_mylist">
                        <a href="main.php?do=quanlyroom">Quản lý phòng</a>
                    </li>
            </ul>
        </div>
        <div class="col l-10 container">
            <?php
                $do = isset($_GET['do']) ? $_GET['do'] : "user";
                include $do.".php";
            ?>
        </div>
        <script src="../Js/mainuser.js"></script>
    </div>
</div>
</body>
</html>