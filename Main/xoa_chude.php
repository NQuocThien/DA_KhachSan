<?php 
    include "../Chung/cauhinh.php";
    $sql ="delete from chude where MaChuDe = ".$_GET['id'];
    $action =  $connect->query($sql);
    if(!$action )
    {
        die("lỗi: ".$sql."" . $connect->error);
    }

    else {
        header("location: main.php?do=ql_chude");
    }
?>