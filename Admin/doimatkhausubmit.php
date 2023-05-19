<?php
    include "../Client/cauhinh.php";
    session_start();
    $passold=$_POST['passold'];
    $passnew=$_POST['passnew'];
    $passnewo=$_POST['passnewo'];
    if(trim($passold)==""){
        echo '<script>
        alert("Mật khẩu không được bỏ trống!");
        window.history.back();
        </script>';
        exit;
    }
    elseif(trim($passnew)==""){
        echo '<script>
        alert("Mật khẩu mới không được bỏ trống!");
        window.history.back();
        </script>';
        exit;
    }
    elseif(trim($passnewo)==""){
        echo '<script>
        alert("Mật khẩu xác nhận không được bỏ trống!");
        window.history.back();
        </script>';
        exit;
    }
    elseif($passnewo!=$passnew){
        echo '<script>
        alert("Mật khẩu mới và xác nhận không giống nhau vui lòng nhập lại!");
        window.history.back();
        </script>';
        exit;
    }
    else{
        $passold1=md5($passold);
        echo $passold1;
        $select_kiemtra1 = $pdo->prepare("SELECT * FROM `user` WHERE `MatKhau`='".$passold1."' and `MaNguoiDung`='".$_SESSION['MaND']."'");	
        $select_kiemtra1->execute();
        if( $select_kiemtra1->rowCount() > 0){
            $passnewo=md5( $passnewo);
            $sql_update_userpass = $pdo->prepare("UPDATE `user` SET `MatKhau`='$passnewo' WHERE `MaNguoiDung`=".$_SESSION['MaND']);
            $sql_update_userpass->execute();
            echo '<script>
            alert("Đổi mật khẩu thành công!");
            window.history.back();
            </script>';
            exit;
        }
        else{
            echo '<script>
            alert("Mật khẩu cũ không đúng!'.$select_kiemtra1->execute().'");
            window.history.back();
            </script>';
            exit;
        }
    }
?>