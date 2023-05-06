<?php
     include "../Chung/cauhinh.php";
    
     $select_ksphong = $pdo->prepare("SELECT * FROM KhachSan ks, Phong p WHERE ks.`MaKhachSan` = p.`MaKhachSan` AND p.`MaKhachSan`='1'");	
     $select_ksphong->execute();
     $row = $select_ksphong->fetch(PDO::FETCH_ASSOC);
     $date = date('d-m-Y H:i');
     for ($i = 0; $i < $_SESSION['tongks']; $i++) {
        
    }
?>
<div class="room" 
<?php if($row['TinhTrang']=='Trống'){ 
    echo "style=\"background-color: #3d8cbd;\"";}?>>
    <form action="">
    <div class="img_iconroom"><?php echo  $_SESSION['MaKS2']?></div>
    <div class="content_nameroom"><?php echo $row['TenPhong']?></div>
    <div class="trangthai"><?php echo $row['TinhTrang']?></div>
    <div class="ngaydat"><i class="fa-solid fa-calendar-check"></i><?php echo  $date?></div>
    <div class="ngaytra"><i class="fa-regular fa-calendar-xmark"></i><?php echo  $date?></div>
  
        <input type="button" value="Đặt">
    </form>
</div>