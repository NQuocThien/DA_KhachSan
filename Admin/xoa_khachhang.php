<?php 
    include "../Client/cauhinh.php";
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
?>