<?php
    include "../Chung/cauhinh.php";
    $key = $_POST['id'];
    $sql = "SELECT * FROM chuoikhachsan where MaChuoi = ".$key;
    $danhsach = $connect->query($sql);
    $row = $danhsach->fetch_array(MYSQLI_ASSOC);
    echo "<img src=".$row["HinhAnh"]." alt=\"\">";
?>