<?php
    include "../Client/cauhinh.php";
    $fullName = $_POST["full_name"];
    $numberPhone = $_POST["number_phone"];
    $email = $_POST["email"];
    $maChuoiKS = $_POST["select_branch"];
    $MaKS = $_POST["select_hotel"];
    $typeRoom = $_POST["select_type-room"];
    $date_come = $_POST["date_come"];
    $date_leave = $_POST["date_leave"];
    $note = $_POST["note"];
    $soluong = $_POST["number-room"];
    $today = date('y-m-d');

    // insert bảng khách hàng
    
    $sql_insertKH ="INSERT INTO `khachhang`(`HoTen`, `Sdt`, `Email`) 
    VALUES ('$fullName','$numberPhone','$email')";
    if($connect->query($sql_insertKH) === TRUE)
    {

    }else {
        die( "Lỗi: ".$sql_insertKH . "<br>". $connect->error);
        exit;
    }

    $sql_kh = "SELECT * FROM `khachhang` where HoTen = '$fullName' and Sdt = '$numberPhone' and Email = '$email' and MaKhachHang not in (select MaKhachHang from DatPhong)" ;
    $danhsach = $connect->query($sql_kh);
    if($row = $danhsach->fetch_array(MYSQLI_ASSOC))
    {
        $maKhachHang = $row['MaKhachHang'];
        $sql = "INSERT INTO `datphong`( `MaKhachSan`, `MaLoaiPhong`, `MaKhachHang`, `NgayDat`, `NgayNhan`, `NgayTra`, `GhiChu`, `SoLuong`, `TrangThai`) 
        VALUES ('$MaKS','$typeRoom','$maKhachHang' , '$today','$date_come','$date_leave','$note','$soluong', '0' )";
         if($connect->query($sql) === TRUE)
         {
            header( "Location: ../Client/index.php");
         }else {
             die( "Lỗi: ".$sql . "<br>". $connect->error);
         }
    }else 
    {
        die( "Lỗi: ".$sql_kh . "<br>". $connect->error);
    }
?>
