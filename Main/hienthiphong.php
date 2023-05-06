<?php
     include "../Chung/cauhinh.php";
    
     $select_ksphong = $pdo->prepare("SELECT * FROM KhachSan ks, Phong p WHERE ks.`MaKhachSan` = p.`MaKhachSan` AND p.`MaKhachSan`='1'");	
     $select_ksphong->execute();
     
     $date = date('d-m-Y H:i');
        $tongphongforKS=$select_ksphong->rowCount();
    while ($row = $select_ksphong->fetch(PDO::FETCH_ASSOC)){
        if($row['TinhTrang']=='Đang ở'){
            echo "<div class=\"room\" style=\"background-color: #00a65a;\" >";
        }
        elseif($row['TinhTrang']=='Đặt'){
            echo "<div class=\"room\" style=\"background-color: #605ca8;\" >";
        }
        else{
            echo "<div class=\"room\" style=\"background-color: #3d8cbd;\" >";
        }
        echo "<form action=\"\">";
        echo "<div class=\"img_iconroom\">".$_SESSION['MaKS1']."</div>";
        echo "<div class=\"content_nameroom\">".$row['TenPhong']."</div>";
        echo "<div class=\"trangthai\">".$row['TinhTrang']."</div>";
        echo "<div class=\"ngaydat\"><i class=\"fa-solid fa-calendar-check\"></i>".  $date."</div>";
        echo " <div class=\"ngaytra\"><i class=\"fa-regular fa-calendar-xmark\"></i>".$date."</div>";
        echo "<input type=\"submit\" value=\"Đặt\">";
        echo "</form>";
        echo "</div>";
    }
?>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>
<div class="room"></div>