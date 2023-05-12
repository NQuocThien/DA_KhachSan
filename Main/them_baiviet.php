<?php 

?>
<div class="main_insert-content">
<h3>Đăng bài viết</h3>
<form enctype="multipart/form-data"  action="main.php?do=baiviet_them_xuly" method="post">
	<div class="row">
        <div class="form-group col l-12">
            <label for ="content-title"> Tiêu đề</label>
            <input type="text" class="form-control" id="content-title">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for ="content-topic"> Chủ Đề </label>
            <input type="text" class="form-control" id="content-topic">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for ="content-summary">Tóm tắt</label>
            <input type="text" class="form-control" id="content-summary">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for ="content-image">Hình ảnh</label>
            <input type="text" class="form-control" id="content-image">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for ="content-cmt-image">Chú thích ảnh</label>
            <input type="text" class="form-control" id="content-cmt-image">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for ="content-body">Nội dung bài viết</label>
            <input type="text" class="form-control" id="content-body">
            <span class="form-message"></span>
        </div>
    </div>
	
	<input type="submit" value="Đăng bài" />
</form>
</div>