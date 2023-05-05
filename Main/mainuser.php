<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Grid.css">
    <link rel="stylesheet" href="../css/mainuser.css">
    <link rel="stylesheet" href="../css/infouser.css">
</head>
    
 
<body>
<?php session_start();
    if(isset( $_SESSION['MaND']))
    {
        ?>
    <div class="content row">
        <div class="col l-2">
            <header class="header heleft">
               <a href="mainuser.php" style="  color: #fff;" > Hotel AGU</a>
            </header>
            <div class="table_left" >
                <div class="heder_user_table" >
                        <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user_table" > 
                        <span>admin</span>
                </div >
                <ul id="myList" >
                    <li class="li_mylist">
                        <a  data-target="user.php?do=user">Danh Sách Người Dùng</a>
                        
                    </li>
                    <li class="li_mylist">
                        <a  data-target="quanlyroom.php?do=quanlyroom">Quản lý phòng</a>
                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="col l-10">
            <header class="header heright">
                <div class="heder_user" >
                    <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user" >
                    <span>
                        <div class="menu_user">
                            <ul>
                                <a href="mainuser.php?do=infouser">Thông tin cá nhân</a>
                                <a href="#">Đăng xuất</a>
                            </ul>
                        </div>
                        <script src="../Js/mainuser.js"></script>
                </header>
        </div>
    </div>
        <div class="row">
            <div class="navigation col l-2">
                <div class="table_left">
                    <div class="heder_user_table" >
                            <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user_table" > 
                            <p><?php echo$_SESSION['HoTen']?></p>
                    </div>
                    <a href="mainuser.php?do=user">Danh Sách Người Dùng</a>
                    <a href="">Danh sách đặt phòng</a>
                    <a href="">Quản lý các chuổi</a>
                    <a href="">Quản lý khách sạn</a>
                    <a href="">Đăng bài</a>
                    <a href="">Thống kê</a>
                </div>
            </div>
            <div class="container col l-10">
                    <?php
                        $do = isset($_GET['do']) ? $_GET['do'] : "user";
                        include $do.".php";
                    ?>
            </div>
        </div>
    <?php }else header("Location: login.php");?>
</body>
</html>