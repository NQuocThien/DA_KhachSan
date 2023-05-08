<?php
    include "../Chung/cauhinh.php";
	// Lấy thông tin từ FORM
    $IDHotel = $_POST["IDHotel"];
    $HotelName = $_POST["TenKS"];
    $Adress = $_POST["DiaChi"];
    $NumberPhone = $_POST["Sdt"];
    $Lever = $_POST["XepLoai"];
    $Description = $_POST["Mota"];
	
	// Kiểm tra
	// if(trim($TenKS) == "")
	// {
	// 	echo '<script>
	// 	alert("Tên khách sạn không được bỏ trống");
	// 	window.history.back();
	// 	</script>';
	// 	exit;
	// }
	// elseif(trim($DiaChi) == "")
	// {
	// 	echo '<script>
	// 	alert("Địa chỉ khách sạn không được bỏ trống");
	// 	window.history.back();
	// 	</script>';
	// 	exit;
	// }
	// elseif(trim($Sdt) == "")
	// {
	// 	echo '<script>
	// 	alert("Liên lạc khách sạn không được bỏ trống");
	// 	window.history.back();
	// 	</script>';
	// 	exit;
	// }
	// elseif(trim($MoTa) == "")
	// {
	// 	echo '<script>
	// 	alert("Mô tả khách sạn không được bỏ trống");
	// 	window.history.back();
	// 	</script>';
	// 	exit;
	// }
	// else
	// {
        if(isset($_FILES['HinhAnh']) && $_FILES['HinhAnh']['error'] == 0){
            echo '<script>
            alert("có hình);
            window.history.back();
            </script>';
            //Lưu tập tin upload vào thư mục hinhanh 
            $target_path = "../images/";
            $target_path = $target_path . basename($_FILES['HinhAnh']['name']);
            $img =  $_FILES['HinhAnh']['name'];
            if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target_path))
                echo "";
                //echo "Tập tin " . basename($_FILES['HinhAnh']['name']) . " đã được upload.<br/>";
            else
                echo "Tập tin upload không thành công.<br/>";	
            
            $sql = " UPDATE `khachsan` SET 
            `TenKhachSan`= '".$HotelName."',`XepLoai`= '".$Lever."',`MoTa`='".$Description."',`DiaChi`= '".$Adress."',`Sdt`='".$NumberPhone."',`HinhAnh`='".$img."' WHERE MaKhachSan = '".$IDHotel."'";
            $danhsach = $connect->query($sql);
            //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
            if (!$danhsach) {
                die("Không thể thực hiện câu lệnh SQL: " . $sql);
                exit();
            }
            else
            {
                header("Location: main.php?do=ql_khachsan");
            }
        }else {
            $sql = " UPDATE `khachsan` SET 
            `TenKhachSan`= '".$HotelName."',`XepLoai`= '".$Lever."',`MoTa`='".$Description."',`DiaChi`= '".$Adress."',`Sdt`='".$NumberPhone."' WHERE MaKhachSan = '".$IDHotel."'";
            $danhsach = $connect->query($sql);
            //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
            if (!$danhsach) {
                die("Không thể thực hiện câu lệnh SQL: " . $sql);
                exit();
            }
            else
            {
                header("Location: main.php?do=ql_khachsan");
            }
        }
	//}
?>