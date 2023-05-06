<?php
    include "../Chung/cauhinh.php";
    session_start();
    $mandid=$_GET['id'];
    $sql_kiemtra = "DELETE FROM `user` WHERE `MaNguoiDung`='$mandid'";
		
		$danhsach = $connect->query($sql_kiemtra);
		
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $sql_kiemtra);
			exit();
		}
        else{
            if($_SESSION['MaND'] == $mandid )
            {
                session_unset();
                header("Location: login.php");
            }else
            header("Location: main.php");
        }
?>