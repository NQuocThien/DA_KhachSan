<?php
    $title = $_POST['title'];
    $topic = $_POST['topic'];
    $summary = $_POST['summary'];
    $cmt_img = $_POST['cmt_img'];
    $content = $_POST['content'];
    $user_id = $_SESSION['MaND'];
// Return current date from the remote server
    $date = date('y-m-d');
    echo $date, $user_id;
   
    $target_path = "../images/";
    echo $image_name = basename($_FILES['image']['name']);
    echo "hay".$user_id;
    $target_path = $target_path . $image_name;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
    {
        $sql_insert_topic = "INSERT INTO `baiviet`(`MaBaiViet`, `MaNguoiDung`, `MaChuDe`, `TieuDe`, `TomTat`, `NoiDung`, `HinhAnh`, `ChuThichAnh`, `LuotXem`, `KiemDuyet`, `NgayDang`) 
        VALUES (NULL,'$user_id','$topic','$title','$summary','$content','$image_name','$cmt_img','0','0','$date')";
        $danhsach = $connect->query($sql_insert_topic);
         if (!$danhsach) {
            die("Không thể thực hiện câu lệnh SQL: " .$sql_insert_topic ."". $connect->connect_error);
            exit();
        }
        else
        {
            header("Location:index.php?do=ql_baiviet");
        }
    }   
    else
        echo "Tập tin upload không thành công.<br/>";	
?>