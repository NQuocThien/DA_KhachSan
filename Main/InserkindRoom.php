<div class="InserkindRoom">
    <div class="form_inser">
        <form action="InserkindRoom_submit.php" method="post" enctype="multipart/form-data">
            <h3>Thêm loại phòng</h3>
            <div class="ifo_room1">
                Chọn hình phòng: <input type="file" name="taptin1">
            </div>
            <div class="ifo_room">
                <p class="p_ifo0">Tên Loại Phòng</p>
                <input type="text"name="TenLoaiPhong">
            </div>
            <div class="ifo_room">
                <p class="p_ifo1">Giá</p>
                <input type="text"name="Gia">
            </div>
            <div class="ifo_room">
                <p class="p_ifo2">Kích thước phòng</p>
                <input type="text"name="KichThuoc">
                </div>
            <div class="ifo_room">
                <p class="p_ifo3">Số lượng người</p>
                <input type="text"name="SoLuong"> 
            </div>
            <div class="ifo_room">
                <p class="p_ifo4">Loại giường</p>
                <div class="radio_loaigiuong">
                <input type="radio"name="LoaiGiuong" id="LoaiGiuong" value="1">Vip
                <input type="radio"name="LoaiGiuong" id="LoaiGiuong" value="2"> Bình thường
                </div>
            </div>
            <input type="submit" value="Thêm phòng" name="submit" class="themphong">
        </form>
    </div>
</div>
