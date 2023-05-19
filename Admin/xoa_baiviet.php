<?php 
    include "../Client/cauhinh.php";
    ob_start();
    $key = $_GET['id'];
    $sql_delete = "DELETE FROM baiviet WHERE MaBaiViet = '$key'";
    $test = $connect->query($sql_delete);
    if(!$test)
    {
        die("Failed to delete" . $sql_delete);
        exit;
    }
    else 
    {
        echo '<script>
        alert("Xóa thành công!");
        window.history.back();
        </script>';
        header("Location:index.php?do=ql_baiviet");
        ob_end_flush();
    }
?>