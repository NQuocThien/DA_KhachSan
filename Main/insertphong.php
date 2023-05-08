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
            <form action="" method="post">
                <div class="choose">
                        <label for="select_list-hotel">Chọn khách sạn:</label>
                        <select name="select_list-hotel" id="select_list-hotel">
                            <option value="0">----Chọn----</option>
                            <?php 
                                while($row1 = $sql_selectks->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<option value =".$row1["MaKhachSan"].">".$row1["TenKhachSan"]."</option>"; ;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="second_isphong">
                    <div class="choose">
                        <label for="select_list-hotel">Chọn Loại phòng:</label>
                        <select name="select_list-hotel" id="select_list-hotel">
                            <option value="0">----Chọn----</option>
                            <?php 
                                while($row2 = $sql_selectloaiphong->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<option value =".$row2["MaLoai"].">".$row2["TenLoaiPhong"]."</option>"; ;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="thongtinphong">
                        <div class="ttpten">
                            <span>Tên phòng:</span>
                            <input type="text">
                        </div>
                        <div class="ttptinhtrang">
                            <span>Tình trạng:</span>
                            <input type="text">
                        </div>
                            

                    </div>
                </div>
                </div>
            </form>
        </div>
                
        </div>
    </div>
    <script>
        var test= document.getElementById('back');
                        test.addEventListener('click',()=>{
                            window.history.back();
                        });
                    
    </script>
</div>