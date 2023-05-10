<?php
    $madp = $_GET['id'];
    $trangthai = $_GET['trangthai'];
   
    $selectdatphong = $pdo->prepare("UPDATE `datphong` SET `TrangThai`='$trangthai' WHERE `MaDatPhong`='$madp'");	
    $selectdatphong->execute();
    if($selectdatphong){
        echo '<script>
        alert("Đặt thành công!");
        window.history.back();
        </script>';
        exit;
    }
        
    else
    {
        echo '<script>
        alert("Lỗi đặt !");
        window.history.back();
        </script>';
    exit;
    }    
?>