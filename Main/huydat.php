<?php 
     include "../Chung/cauhinh.php";
     $MaDatPhong=$_GET['id'];
        $upddatphong = $pdo->prepare("UPDATE `datphong` SET `MaPhong`='0',`TrangThai`='0' WHERE `MaDatPhong`='$MaDatPhong'");	
        $upddatphong->execute();
         if($upddatphong){
            echo '<script>
            alert("Hủy đặt thành công!");
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