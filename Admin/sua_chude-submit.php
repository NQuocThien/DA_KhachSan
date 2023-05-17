<?php
    include "../Client/cauhinh.php";
	// Lấy thông tin từ FORM
    $topic_id = $_POST["MaChuDe"];
    $topic_name = $_POST["TenChuDe"];
    echo $topic_id;
    $sql = " UPDATE `chude` SET 
    `TenChuDe`= '".$topic_name."' WHERE `MaChuDe` = '".$topic_id."'";
    $danhsach = $connect->query($sql);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $sql);
        exit();
    }
    else
    {
        header("Location: index.php?do=ql_chude");
    }
?>