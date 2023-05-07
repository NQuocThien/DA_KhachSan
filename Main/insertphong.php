<?php
    include "../Chung/cauhinh.php";
	$sql_selectchuoiks = $pdo->prepare("SELECT * FROM `chuoikhachsan` WHERE 1");	
	$sql_selectchuoiks->execute();
    $sql_selectks = $pdo->prepare("SELECT * FROM `khachsan` WHERE 1");	
	$sql_selectks->execute();



?>
<div class="Ngoai"Ngoai>
    <div class="che"></div>
    <div class="form_inserphong">
        <div class="form_isphong_header">
            <h2>Thêm phòng</h2>
            <p  ><i id="back"class="fa-solid fa-xmark"></i></p>
        </div>
        <div class="form_isphong_body">
            <form action="" method="post">
                <div class="firt_isphong">
                    <div class="choose">
                            <label for="select_list-hotel">Chọn đổi chuỗi khách sạn:</label>
                            <select name="select_list-hotel" id="select_list-hotel">
                                <option value="0">----chọn----</option>
                                <?php 
                                    while($row = $sql_selectchuoiks->fetch(PDO::FETCH_ASSOC))
                                    {
                                        echo "<option value =".$row["MaChuoi"].">".$row["TenChuoi"]."</option>"; ;
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="choose">
                            <label for="select_list-hotel">Chọn đổi khách sạn:</label>
                            <select name="select_list-hotel" id="select_list-hotel">
                                <option value="0">----chọn----</option>
                                <?php 
                                    while($row1 = $sql_selectks->fetch(PDO::FETCH_ASSOC))
                                    {
                                        echo "<option value =".$row1["MaKhachSan"].">".$row1["TenKhachSan"]."</option>"; ;
                                    }
                                ?>
                            </select>
                    </div>
                </div>
                <div class="second_isphong">

                </div>
            </form>
        </div>
    </div>
    
</div>