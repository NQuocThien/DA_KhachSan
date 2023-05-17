<?php
    include "../Client/cauhinh.php";
    $mandid=$_GET['id'];

    $sql_selectPhong = $pdo->prepare("SELECT * FROM `phong` WHERE  `MaLoaiPhong`='$mandid'");
    
    $sql_selectdphong = $pdo->prepare("SELECT * FROM `datphong` WHERE  `MaLoaiPhong`='$mandid'");
   
    if($sql_selectPhong->execute())
    {
        $sql_dphong = $pdo->prepare("DELETE FROM `phong` WHERE `MaLoaiPhong`='$mandid'");
        $sql_dphong->execute();
    }
    if( $sql_selectdphong->execute()){
        $sql_dphong = $pdo->prepare("DELETE FROM `datphong` WHERE `MaLoaiPhong`='$mandid'");
        $sql_dphong->execute();
    }
    $sql_kiemtra = "DELETE FROM `loaiphong` WHERE `MaLoai`='$mandid'";
		
    $danhsach = $connect->query($sql_kiemtra);	
		if (!$danhsach) {
            echo '<script>
            alert("Vui lòng xóa Mã Loại Phòng ='. $mandid.' ở Phòng hoặc Đặt Phòng");
            window.history.back();
            </script>';
            exit;
		}
        else{
            echo '<script>
            alert("Xóa thành công!");
            window.history.back();
            </script>';
           
            header("Location: index.php?do=quanlyloaiphong");
        }
?>