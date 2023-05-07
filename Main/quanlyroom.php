<?php
     include "../Chung/cauhinh.php";
    //  session_start();
     $stmt = $pdo->prepare("SELECT DISTINCT ks.`MaKhachSan`,ks.`TenKhachSan` FROM KhachSan ks, Phong p WHERE ks.`MaKhachSan` = p.`MaKhachSan`");	
     $stmt->execute();
     

?>
<div class="main_quanlroom" >
    <div class="header_room">
        <div class="hr_firt">
            <p>Quản lý phòng</p>
            <div class="menuroom">
                
            <div class="menu_iconroom ">
                <i id="my_menu" class="fa-solid fa-bars"></i>
                 <div  id = "nav_menuroo"class="nav_menuroom ">
                    <a data-target="insertphong.php" class="myLink" >Loại phòng</a>
                    <!-- <a data-target="" class="myLink" >Loại phòng</a>
                    <a data-target="" class="myLink" >Loại phòng</a> -->
                </div>
                
            </div>
                
            </div>
          
            
        </div>
        <div class="hr_second">
            <div class="icon_trangthairoom"><p></p><span>:Trống</span></div>
            <div class="icon_trangthairoom"><p></p><span>:Đang ở</span></div>
            <div class="icon_trangthairoom"><p></p><span>:Đặt cọc</span></div>
            
        </div>
       
      
    </div>
    <div class="form_room"></div>
    <div class="body_room">
            <div class="br_firt" id = "br_firt">
                <?php
                    include "../Chung/cauhinh.php";
                    while ($dong = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $stmt1 = $pdo->prepare("SELECT COUNT(ks.`MaKhachSan`)as'tongphong' from KhachSan ks, Phong p WHERE ks.`MaKhachSan` = p.`MaKhachSan` AND ks.`TenKhachSan`=:value");
                        $stmt1->bindParam(':value', $dong['TenKhachSan']);
                        $stmt1->execute();
                        $dong1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                       
				        $_SESSION['MaKS'.$dong['MaKhachSan'].''] = $dong['MaKhachSan'];
                        echo  "<div class=\"room_mylist\">
                        <i class=\"fa-solid fa-hotel\"></i>
                     <a id=\"aroom_mylist\"class=\"myLink\" data-target=\"hienthiphong.php?do=&id=".$dong['MaKhachSan']."\">".$dong['TenKhachSan']."</a>
                     <span>" .$dong1['tongphong']."</span>
                    </div>";
                    }
                ?>
           
            </div>
            <div class="br_second" id="br_second">
                
            </div>
            
    </div>
    
</div>
