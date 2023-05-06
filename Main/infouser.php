

<div class="main_infouser" >
    <div class="ifo" >
        <h3 >Thông tin cá nhân</h3>
        <form action="xulyupload.php" method="POST" enctype="multipart/form-data">

             <input type="file" name ="myFileIMG"id="myFileInput" style="display:none">
             <img id="myImage" class="img_user2" style="display:none">
             <img src='../upload/<?php echo$_SESSION['Img']?>' id='myImage1' class='img_user1'style="display:block">
           
            <input type="submit" value="Upload" name="submit">
		</form>
        <button id="btn_chonImg" onclick="document.getElementById('myFileInput').click();">
        <i class="fa-solid fa-camera"></i>
    </button>
        <div class="contener_user">
            <span>Họ và tên:</span>
            <div class="name"><?php echo $_SESSION['HoTen']?></div>
        </div>
        <div class="contener_user">
           
            <span>Tài khoản:</span>
            <div class="name_user"> <?php echo $_SESSION['Taikhoan']?></div>
        </div>
        <div class="contener_user">
            <span>Quyền:</span>
            <div class="quyen"><?php if($_SESSION['Quyen']==1) echo "Quản lý"; else echo "Nhân viên";?></div>
        </div>
    </div>
</div>