<?php 
    include "../Client/cauhinh.php";
    
    $sql1 ="select * from datphong where MaKhachHang = ".$_GET['id'];
    $action1 =  $connect->query($sql1);
    if($action1){
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