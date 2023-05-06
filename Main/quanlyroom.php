<?php
     include "../Chung/cauhinh.php";
     $sql_kiemtra = "SELECT DISTINCT * FROM KhachSan ks, Phong p WHERE ks.`MaKhachSan` = p.`MaKhachSan` ";	
		$danhsach = $connect->query($sql_kiemtra);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<div class="main_quanlroom" >
    <div class="header_room">
        <div class="hr_firt">
            <p>Quản lý phòng</p>
            <div class="menuroom">
                
            <div class="menu_iconroom ">
                <i id="my_menu" class="fa-solid fa-bars"></i>
                 <div  id = "nav_menuroom"class="nav_menuroom ">
                    <a href="#">Loại phòng</a>
                    <a href="#">Loại phòng</a>
                    <a href="#">Loại phòng</a>
                </div>
            </div>
            </div>
            <script src="../Js/quanlyroom.js"></script>
        </div>
        <div class="hr_second">
            <div class="icon_trangthairoom"><p>a</p><span>:Trống</span></div>
            <div class="icon_trangthairoom"><p>b</p><span>:Đang ở</span></div>
            <div class="icon_trangthairoom"><p>c</p><span>:Đặt cọc</span></div>
            
        </div>
       
      
    </div>
    <div class="form_room"></div>
    <div class="body_room">
            <div class="br_firt" id="myList">
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
                     <a id=\"aroom_mylist\" data-target=\"quanlyroom.php?dr=hienthiphong&id=".$dong['MaKhachSan']."\">".$dong['TenKhachSan']."</a>
                     <span>" .$dong1['tongphong']."</span>
                    </div>";
                    }
                ?>
            </div>
            <div class="br_second" id="br_second">
                <?php
                    $do = isset($_GET['dr']) ? $_GET['dr'] : "rong";
                    include $do.".php";
                ?>
            </div>
            <script src="../Js/quanlyroom.js"></script>
    </div>
    
            </div>
    </div>
</div>
