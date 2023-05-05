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
    <link rel="stylesheet" href="../css/quanlyroom.css">
    <?php session_start();?>
    <script src="https://kit.fontawesome.com/0f57b9b4e5.js" crossorigin="anonymous"></script>
    
</head>
<body>
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
                    </span>
                </div>
                <script src="../Js/mainuser.js"></script>

            </header>
            
            <div id="container" class = "grid content_right">
                <?php
                    $do = isset($_GET['do']) ? $_GET['do'] : "user";
                    include $do.".php";
                ?>
            </div>
            
        </div>
    </div>
</body>
</html>