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
    <?php session_start();?>
</head>
<body>
    <div class="content row">
        <div class="col l-2">
            <header class="header heleft">
               <a href="#" style=" color: #fff;"> Hotel AGU</a>
            </header>
            <div class="table_left">
                <div class="heder_user_table" >
                        <img src="../upload/<?php echo$_SESSION['Img']?>" alt="" class="img_user_table" > 
                        <span>admin</span>
                </div>
                <a href="mainuser.php?do=user">Danh Sách Người Dùng</a>
                <a href="">Nội dung 1</a>
                <a href="">Nội dung 1</a>
                <a href="">Nội dung 1</a>
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