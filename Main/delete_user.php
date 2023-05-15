<?php
    include "../Chung/cauhinh.php";
    $mandid=$_GET['id'];
    $sql_check_user = "SELECT * FROM user s, baiviet bv WHERE s.MaNguoiDung = bv.MaNguoiDung and s.MaNguoiDung = '$mandid'";
    if($connect->query($sql))
    {
        
    }else 
    {
        delete_user($mandid);
    }
    
    function delete_user($mandid)
    {
        include "../Chung/cauhinh.php";
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
    }
?>