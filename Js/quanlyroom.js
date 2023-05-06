const linkroom = document.querySelectorAll('#br_firt a');
  
 //Thêm sự kiện click vào từng phần tử a
 linkroom.forEach(link => {
   link.addEventListener('click', function(event) {
     // Ngăn chặn hành động mặc định của phần tử a
     event.preventDefault();
     // Lấy đường dẫn của file PHP tương ứng
     const target1 = this.getAttribute('data-target');
     
     // Lấy nội dung của file PHP tương ứng bằng phương thức fetch()
     fetch(target1)
       .then(response => response.text())
       .then(data => {
         // Gán nội dung của file PHP vào phần tử HTML
         const content1 = document.getElementById('br_second');
         content1.innerHTML = data;
         
         // Xóa lớp active khỏi tất cả các phần tử a
         linkroom.forEach(link => {
           link.classList.remove('active');
         });
         
         // Thêm lớp active vào phần tử a được click
         this.classList.add('active');
       });
   });
 });