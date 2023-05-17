<?php
    include "../Client/cauhinh.php";
	// Lấy thông tin từ FORM
    $MaBV = $_POST['MaBV'];
    $topic_id = $_POST["topic"];
    $title = $_POST["title"];
    $TomTat = $_POST["summary"];
    $ChuThich = $_POST["cmt_img"];
    $NoiDung = $_POST["content"];
    $sql_get_content = "SELECT * FROM `baiviet` WHERE `MaBaiViet` = $MaBV";
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        
        $contents = $connect->query($sql_get_content);
        if(isset($contents))
        {
            $content= $contents->fetch_array(MYSQLI_ASSOC); 
            $path = "../images/".$content["image"];
            unlink($path);
        }
        //Lưu tập tin upload vào thư mục hinhanh 
        $target_path = "../images/";
        $target_path = $target_path . basename($_FILES['image']['name']);
        $img =  $_FILES['image']['name'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
            echo "";
            //echo "Tập tin " . basename($_FILES['HinhAnh']['name']) . " đã được upload.<br/>";
        else
            echo "Tập tin upload không thành công.<br/>";	
        
        $sql = " UPDATE `baiviet` SET 
         `TieuDe`= '".$title."',`TomTat`= '".$TomTat."',MaChuDe = '$topic_id',`NoiDung`='".$NoiDung."',`ChuThichAnh`= '".$ChuThich."', `HinhAnh`='".$img."' WHERE MaBaiViet = '".$MaBV."'";
        $danhsach = $connect->query($sql);
        //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
        if (!$danhsach) {
            die("Không thể thực hiện câu lệnh SQL: " . $sql);
            exit();
        }
        else
        {
            header("Location: index.php?do=ql_baiviet");
        }
    }else {
        $sql = " UPDATE `baiviet` SET 
         `TieuDe`= '".$title."',`TomTat`= '".$TomTat."',MaChuDe = '$topic_id',`NoiDung`='".$NoiDung."',`ChuThichAnh`= '".$ChuThich."' WHERE MaBaiViet = '".$MaBV."'";
        $danhsach = $connect->query($sql);
        //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
        if (!$danhsach) {
            die("Không thể thực hiện câu lệnh SQL: " . $sql);
            exit();
        }
        else
        {
            header("Location: index.php?do=ql_baiviet");
        }
    }
?>