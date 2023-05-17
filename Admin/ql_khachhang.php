<?php
    include "../Client/cauhinh.php";
	$sql = "SELECT * FROM `khachhang` where 1";
    $danhsach = $connect->query($sql);
?>
<div class="main_list-topic grid wide">
    <h1>Danh sách khách hàng</h1>
    <div class="row">
        <div class="list_topic col l-12 l-o-1">
            <div class="row">
                <div class="topic-right col l-12 grid ">
                    <table class="table-topic">
                        <tr class="topic-title">
                            <th>
                                <p>Mã Khách Hàng</p>
                            </th>
                            <th>
                                <p>Họ tên</p>
                            </th>
                            <th>
                                <p>SDT</p>
                            </th>
                            <th>
                                <p>Email</p>
                            </th>
                            <th> Hành động</th>
                        </tr>
                        <?php 
                        while($row = $danhsach->fetch_array(MYSQLI_ASSOC))
                        {
                            echo "<tr>";
                            echo "    <td>".$row["MaKhachHang"]."</td>";
                            echo "    <td>".$row["HoTen"]."</td>";
                            echo "    <td>".$row["Sdt"]."</td>";
                            echo "    <td>".$row["Email"]."</td>";
                            echo "   <td><a href='index.php?do=xoa_khachhang&id=" . $row["MaKhachHang"] . "' onclick='return confirm(\"Bạn có muốn xóa khách hàng : " . $row['HoTen'] . " không?\")'><img src='../images/delete.png' /></a> </td>" ;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>        