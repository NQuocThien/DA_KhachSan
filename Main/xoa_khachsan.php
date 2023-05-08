<?php
    include "../Chung/cauhinh.php";
    if(isset($_SESSION['MaND'])){
    $maks=$_GET['id'];
    $sqlphong = "DELETE FROM `phong` WHERE `MaKhachSan`='$maks'";
    if (!$connect->query($sqlphong))
    {
        echo "Error: " .$sqlphong;
    }
    $sql_hinhanh = "DELETE FROM `hinhanh` WHERE `MaKhachSan`='$maks'";

    if(!$connect->query($sql_hinhanh))
    {
        echo "Error: " .$sql_hinhanh;

    }

    $sqlks = "DELETE FROM `khachsan` WHERE `MaKhachSan`='$maks'";
		
		$danhsach = $connect->query($sqlks);
		
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $sqlks);
			exit();
		}
        else{
            header("Location: main.php?do=ql_khachsan");
        }
    }
?>