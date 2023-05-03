<?php
    include "../Chung/cauhinh.php";
    $mandid=$_GET['id'];
    $sql_kiemtra = "DELETE FROM `user` WHERE `MaNguoiDung`='$mandid'";
		
		$danhsach = $connect->query($sql_kiemtra);
		
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
        else{
            header("Location: mainuser.php");
        }
?>