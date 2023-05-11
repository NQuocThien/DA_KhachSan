<?php
     include "../Chung/cauhinh.php";
?>
<div class="dsDatPhong">
    <div class="header_datphong">
        <h2>Danh sách đặt phòng</h2>
        <div class="search_datphongchuoi">
            <select name="chuoi" id="select_chuoiKS">
                <option value="0"> ---- chon ---</option>
                <?php 
                    $sql = "SELECT * FROM chuoikhachsan ";
                    $danhsach = $connect -> query($sql);
                    while ($row = $danhsach->fetch_array(MYSQLI_ASSOC))
                    {
                        echo "<option value= ".$row["MaChuoi"].">".$row["TenChuoi"]."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="search_datphongtheoks">
            <select name="chuoi" id="select_KS">
            <option value="0"> ---- Chọn ---</option>
                
            </select>
        </div>
    </div>
    <div class="body_datphong">

    </div>
</div>
<script type="module" >
    import {myAjax} from "../handle/ajax.js";
    myAjax('.dsDatPhong .search_datphongchuoi #select_chuoiKS',".dsDatPhong .search_datphongtheoks #select_KS", "../handle/handle_select_ks.php" );
    myAjax('.dsDatPhong .search_datphongtheoks #select_KS',".dsDatPhong .body_datphong", "../handle/handle_change_body_datphong.php" );
</script>
