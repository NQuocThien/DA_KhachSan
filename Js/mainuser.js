const img_usera=document.querySelector('.img_user');
var ismenu = false;
img_usera.addEventListener('click',() => {
    var caption = document.querySelector('.menu_user');
 
    if(ismenu){
        caption.style.display = 'block';
        ismenu = false;
    }
    else{
        caption.style.display = 'none';
        ismenu = true;
    }
});
 // Lấy tất cả các phần tử a
 const links = document.querySelectorAll('#myList a');
  
 //Thêm sự kiện click vào từng phần tử a
 links.forEach(link => {
   link.addEventListener('click', function(event) {
     // Ngăn chặn hành động mặc định của phần tử a
     event.preventDefault();
     // Lấy đường dẫn của file PHP tương ứng
     const target = this.getAttribute('data-target');
     
     // Lấy nội dung của file PHP tương ứng bằng phương thức fetch()
     fetch(target)
       .then(response => response.text())
       .then(data => {
         // Gán nội dung của file PHP vào phần tử HTML
         const content = document.getElementById('container');
         content.innerHTML = data;
         
         // Xóa lớp active khỏi tất cả các phần tử a
         links.forEach(link => {
           link.classList.remove('active');
         });
         
         // Thêm lớp active vào phần tử a được click
         this.classList.add('active');
       });
   });
 });

 var linksroom = document.querySelectorAll(".myLink");
 for (var i = 0; i < linksroom.length; i++) {
     linksroom[i].addEventListener("click", function() {
         // Xóa lớp active của các thẻ <a> khác
         for (var j = 0; j < linksroom.length; j++) {
             linksroom[j].classList.remove("active");
         }
 
         // Gán lớp active cho thẻ <a> được nhấp chuột
         this.classList.add("active");
     });
 }

const fileInput = document.getElementById('myFileInput');
const image = document.getElementById('myImage');
const image1 = document.getElementById('myImage1');
fileInput.addEventListener('change', () => {
    image1.style.display = 'none';
    image.style.display = 'block';
    // Lấy tệp hình ảnh đã chọn
    const file = fileInput.files[0];
    
    // Hiển thị hình ảnh
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
    image.src = reader.result;
    };
});

const fileInputRoom = document.getElementById('myFileInputRoom');
const imageRoom = document.getElementById('myImageRoom');
fileInputRoom.addEventListener('change', function() {
    // Lấy tệp hình ảnh đã chọn
    const fileRoom = fileInputRoom.files[0];
    
    // Hiển thị hình ảnh
    const readerRoom = new FileReader();
    readerRoom.readAsDataURL(fileRoom);
    readerRoom.onload = function () {
      imageRoom.src = readerRoom.result;
    };
});
          
