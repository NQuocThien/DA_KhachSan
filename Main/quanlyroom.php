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
                 <div class="nav_menuroom ">
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
                    echo  "<div class=\"li_mylist\"> <a id=\"a_mylist\" data-target=\"user.php?do=user\">".$dong['TenKhachSan']."</a></div>"
                ?>
            </div>
            <div class="br_second">
                <div class="room">
                    <div class="img_iconroom">sad</div>
                    <div class="content_nameroom">ád</div>
                    <div class="trangthai">ád</div>
                    <div class="ngaydat">ád</div>
                    <div class="ngaytra">ád</div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>
                <div class="room">
                <div class="img_iconroom"></div>
                    <div class="content_nameroom"></div>
                    <div class="trangthai"></div>
                    <div class="ngaydat"></div>
                    <div class="ngaytra"></div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>
                <div class="room">
                <div class="img_iconroom"></div>
                    <div class="content_nameroom"></div>
                    <div class="trangthai"></div>
                    <div class="ngaydat"></div>
                    <div class="ngaytra"></div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>
                <div class="room">
                <div class="img_iconroom"></div>
                    <div class="content_nameroom"></div>
                    <div class="trangthai"></div>
                    <div class="ngaydat"></div>
                    <div class="ngaytra"></div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>
                <div class="room">
                <div class="img_iconroom"></div>
                    <div class="content_nameroom"></div>
                    <div class="trangthai"></div>
                    <div class="ngaydat"></div>
                    <div class="ngaytra"></div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>
                <div class="room">
                    <div class="img_iconroom"></div>
                    <div class="content_nameroom"></div>
                    <div class="trangthai"></div>
                    <div class="ngaydat"></div>
                    <div class="ngaytra"></div>
                    <form action="">
                        <input type="button" value="Đặt">
                    </form>
                </div>

            </div>
    </div>
</div>
