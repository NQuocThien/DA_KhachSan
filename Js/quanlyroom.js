var linksroom = document.querySelectorAll(".myLink");
for (var i = 0; i < links.length; i++) {
    linksroom[i].addEventListener("click", function() {
        // Xóa lớp active của các thẻ <a> khác
        for (var j = 0; j < linksroom.length; j++) {
            linksroom[j].classList.remove("active");
        }

        // Gán lớp active cho thẻ <a> được nhấp chuột
        this.classList.add("active");
    });
}