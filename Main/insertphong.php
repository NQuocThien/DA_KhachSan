<?php
    include "../Chung/cauhinh.php";
    $key=$_POST['chuoi'];
    $sql_selectks = $pdo->prepare("SELECT * FROM `khachsan` WHERE `MaChuoi`='$key'");
   
    if($key==0){
        echo '<script>
                alert("Vui lòng chọn chuỗi khách sạn");
                window.history.back();
                </script>';
        		exit;
    }
    else{
        $sql_selectks->execute();
    }
    $sql_selectloaiphong = $pdo->prepare("SELECT * FROM `loaiphong` WHERE 1");
    $sql_selectloaiphong->execute();
    

?>
<div class="Ngoai">
    <div class="che"></div>
    <div class="form_inserphong">
        <div class="form_isphong_header">
            <h2>Thêm phòng</h2>
            <p  ><i id="back"class="fa-solid fa-xmark"></i></p>
        </div>
        <div class="form_isphong_body">
            <form action="" method="post" id="form_themphong">
                <div class="choose form_group">
                    <label for="select_list-hotel">Chọn khách sạn:</label>
                    <select name="select_list-hotel" id="select_list-hotel" class="form-control">
                        <option value="0">----Chọn----</option>
                        <?php 
                            while($row1 = $sql_selectks->fetch(PDO::FETCH_ASSOC))
                            {
                                echo "<option value =".$row1["MaKhachSan"].">".$row1["TenKhachSan"]."</option>"; ;
                            }
                        ?>
                    </select>
                    <span class="form-message"></span>
                </div>
                <div class="second_isphong ">
                    <div class="choose form_group">
                        <label for="select_room-type">Chọn Loại phòng:</label>
                        <select name="select_room-type" id="select_room-type" class="form-control">
                            <option value="0">----Chọn----</option>
                            <?php 
                                while($row2 = $sql_selectloaiphong->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<option value =".$row2["MaLoai"].">".$row2["TenLoaiPhong"]."</option>"; ;
                                }
                            ?>
                        </select>
                        <span class="form-message"></span>

                    </div>
                    <div class="thongtinphong ">
                        <div class="ttpten form_group">
                            <label for = "room-name" >Tên phòng:</label>
                            <input name = "room-name" type="text" id="room-name" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="ttptinhtrang form_group">
                            <span class="">Tình trạng:</span>
                            <input type="radio" class="form-control" id="trong" name="TinhTrang" value="Trống">
                            <label for="trong">Trống</label><br>
                            <input type="radio" class="form-control" id="DangO" name="TinhTrang" value="Đang ở">
                            <label for="DangO">Đang ở</label><br>
                            <input type="radio" class="form-control" id="datcoc" name="TinhTrang" value="Đặt cọc">
                            <label for="datcoc">Đặt cọc</label><br>
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>
                <button type="submit"> Thêm Phòng </button>
            </form>
        </div>
    </div>
</div>
<script src="../Js/validator.js"></script>
<script>
    Validator({
        form: '#form_themphong',
        orrorSelector: '.form-message',
        formGroupSelector: '.form_group' ,
        rules: [
        Validator.isRequired('#select_list-hotel'),
        Validator.isRequired('#select_room-type'),
        Validator.isRequired('#room-name'),
        Validator.isRequired('input[name="TinhTrang"]'),
        ]
    }) 
</script>
<script>
    var test= document.getElementById('back');
                    test.addEventListener('click',()=>{
                        window.history.back();
                    });
                
</script>
</div>