<?php
    include "../Chung/cauhinh.php";
    $key = $_POST['id'];
    $sql = "SELECT * FROM khachsan where MaChuoi = '$key'";
    $danhsach = $connect->query($sql);
    while($row = $danhsach->fetch_array(MYSQLI_ASSOC))
    {
       echo " <option value=".$row["MaKhachSan"]."> ".$row["TenKhachSan"] ." </option>" ;
    }
?>