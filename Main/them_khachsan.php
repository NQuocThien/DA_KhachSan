<style>
	.col{
		margin-top: 4px;
		margin-bottom: 4px;
	}
</style>
<?php 
	$key = $_POST["select_list-hotel"];
	
 ?>
<div class="main_form_addKS grid wide">
	<h3>Thêm Khách Sạn</h3>
	<form enctype="multipart/form-data"  action="main.php?do=them_khachsan_xuly" method="post" id="form_post">
		<input name ="MaChuoi" type="hidden" value=<?php echo $key; ?>>
		<div class="row no-gutters">
			<div class="form_group col l-12" >
				<div class="row no-gutters">
					<span class="MyFormLabel col l-2">Tên Khách Sạn:</span>
					<input class="form-control col l-10" id="hotel_name" type="text" name="TenKS" class = "col l-10" size = " 60" />
					<span class="form-message"></span>
				</div>
			</div>
			<div class="form_group col l-12" >
				<div class="row no-gutters">
					<span class="MyFormLabel col l-2">Địa chỉ:</span>
					<textarea id="hotel_adress" class="form-control col l-10" name="DiaChi" class = "col l-10" cols="50"></textarea>
					<span class="form-message"></span>
				</div>
			</div>
			<div class="form_group col l-12" >
				<div class="row no-gutters">
					<span class="MyFormLabel col l-2">Số điện thoại:</span>
					<input id="hotel_number-phone" class="form-control col l-10" name="Sdt" cols="50" class = "col l-10"></input>
					<span class="form-message"></span>
				</div>
			</div>
			<div class="form_group col l-12" >
				<div class="row no-gutters">
					<span class="MyFormLabel col l-2">Xếp loại:</span>
					<input type="radio" class="form-control" id="basao" name="XepLoai" value="3">
					<label for="basao">3 <i class="fa-solid fa-star"></i></label><br>
				 	<input type="radio" class="form-control" id="bonsao" name="XepLoai" value="4">
					<label for="bonsao">4 <i class="fa-solid fa-star"></i></label><br>
					<input type="radio" class="form-control" id="namsao" name="XepLoai" value="5">
					<label for="namsao">5 <i class="fa-solid fa-star"></i></label><br>
					<span class="form-message"></span>
				</div>
			</div>
			
			<div class="form_group col l-12" >
				<div class="row no-gutters">
					<span class="MyFormLabel col l-2">Hình ảnh</span>
					<input id="hotel_image" class="form-control" type="file" name="HinhAnh">
					<span class="form-message"></span>
				</div>
			</div>
			<div class="form_group col l-12" >
				<div class="row no-gutters Mota">
					<span class="MyFormLabel col l-12">Mô tả khách sạn:</span>
					<textarea id="hotel_description" class="form-control" class="" name="Mota" id="Mota"></textarea>	
					<span class="form-message"></span>
					<script src="../Js/ckeditor/ckeditor.js"></script>			
					<script>CKEDITOR.replace('Mota');</script>
				</div>
			</div>
			<input type="submit" value="Đăng bài" class="button-submit col l-12"/>
		</div>
	</form>

</div>
	<script src="../Js/validator.js"></script>
	<script>
		Validator({
			form: '#form_post',
			orrorSelector: '.form-message',
			formGroupSelector: '.form_group' ,
			rules: [
			Validator.isRequired('#hotel_name'),
			Validator.isRequired('#hotel_adress'),
			Validator.isRequired('#hotel_number-phone'),
			Validator.isRequired('#hotel_image'),
			Validator.isRequired('#hotel_description'),
			Validator.isRequired('input[name="XepLoai"]'),
			]
		}) 

	</script>

