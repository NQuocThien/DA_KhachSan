<?php
    include "../Chung/cauhinh.php";
    $key = $_POST['id'];
    $sql = "SELECT * FROM khachsan where MaChuoi = ".$key;
    $danhsach = $connect->query($sql);
    while ($row = $danhsach->fetch_array(MYSQLI_ASSOC))
    {
        echo "<div class=\"hotel-element col l-6\">";
        echo "        <div class=\"warper\">";
        echo "            <div class=\"row no-gutters \">";
        echo "                <div class=\"avatar l-3\">";
        echo "                    <img src=".$row['HinhAnh']." alt=\"\">";
        echo "                </div>";
        echo "                <div class=\"infor l-9\">";
        echo "                    <h4>".$row['TenKhachSan']." </h4>";
        echo "                    <p>Xếp loai: ".$row['XepLoai']."</p>";
        echo "                    <p>Địa chỉ: ".$row['DiaChi']."</p>";
        echo "                    <a href=\"\">Sdt: ".$row['Sdt']."</a>";
        echo "                    <div class = \"action\">";
        echo "                    </div>";
        echo "                </div>";
        echo "            </div>";
        echo "        </div>";
        echo "    </div>";
    }
    
?>