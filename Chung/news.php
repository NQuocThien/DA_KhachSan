
    <div class="main_banner">
        <img src="../images/ks1.jpg" alt="">
    </div>
    <div class="main">
        <div class="">
            <ul>
                <li><a href="./index.php">Trang chủ</a>
                    <span></span>
                </li>
                <li>
                    <a href="">Tin tức</a>
                    <span></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="list_new grid wide">
        <div class="row">
            <div class="col l-2">
                <div class="list_cd">
                    <h3> Danh </h3>
                        <?php
                            $sql = "select * from chude";
                            $danhsach = $connect->query($sql);
                            //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
                            if (!$danhsach) {
                                die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
                                exit();
                            }
                            while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
                            {
                                echo "<a href='index.php?do=baiviet_chude&id=".$row['MaChuDe']."'>".$row['TenChuDe']."</a> " ;
                            }
                        ?>
                    </div>
            </div>
            <div class="list_news col l-10">
                <div class="row">
                    <?php
                        $do = isset($_GET['do']) ? $_GET['news'] : "dsbaiviet";
                        include $do . ".php";
                    ?>
                </div>
            </div>
            </div>
        </div>

    </div>
  