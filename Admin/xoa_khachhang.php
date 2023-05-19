<?php 
    include "../Client/cauhinh.php";
    $select_kiemtra1 = $pdo->prepare("select * from datphong where MaKhachHang = ".$_GET['id']);	
    $select_kiemtra1->execute();
    if($select_kiemtra1->rowCount() > 0){
        echo '<script>
        alert("Vui lòng xóa khách hàng đang đặt phòng!");
        window.history.back();
        </script>';
        exit;
    }
    else{
        $sql ="delete from khachhang where MaKhachHang = ".$_GET['id'];
        $action =  $connect->query($sql);
        if(!$action )
        {
            die("lỗi: ".$sql."" . $connect->error);
        }
        else {
            echo '<script>
            alert("Xóa thành công!");
            window.history.back();
            </script>';
            exit;
        }
    }
    
?>