<?php
    include "../Chung/cauhinh.php";
    session_start();
    if($_FILES["myFileIMG"]["error"] > 0)
    {
        echo "Error: " . $_POST["myFileIMG"]["error"]. "<br/>";
    }
    else 
    {
        move_uploaded_file($_FILES["myFileIMG"]["tmp_name"], "../upload/" . $_FILES["myFileIMG"]["name"]);
          $img=$_FILES["myFileIMG"]["name"];
                
				$userid=$_SESSION['MaND'];
                $sql_kiemtra = "UPDATE `user` SET `Img`='$img' WHERE `MaNguoiDung`='$userid'";
                
                $danhsach = $connect->query($sql_kiemtra);
                
                if (!$danhsach) {
                    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
                    exit();
                }
                else{
                    $_SESSION['Img']=$_FILES["myFileIMG"]["name"];
                    header("Location: mainuser.php");
                }
    }
       
?>	