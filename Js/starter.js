// window.addEventListener("load", function(){
//     const slider = document.querySelector(".slider");
//     const sliderMain = document.querySelector(".slider-main");
//     const sliderItems = document.querySelectorAll(".slider-item");
//     const nextBtn = document.querySelector(".slider-next");
//     const preBtn = document.querySelector(".slider-prev");
//     const dotItem = document.querySelectorAll(".slider-dot-item");
//     const sliderItemWidth = sliderItems[0].offsetWidth;
//     const sliderLength = sliderItems.length;
//     let positionX = 0;
//     let index = 0;
//     nextBtn.addEventListener("click", function() {
//         handleChangeSlide(1);
//     });
//     preBtn.addEventListener("click", function() {
//         handleChangeSlide(-1);
//     });
//     function handleChangeSlide(direction)
//     {
//         if(direction ===1 )
//         {
//             if(index >= sliderLength-1) return;
//             index ++;
//             positionX -= sliderItemWidth;
//             sliderMain.style = `transform: translateX(${positionX}px) `;
//             console.log(index,sliderLength );
//         }else if(direction === -1){
//             if(index <= 0) return;
//             index --;
//             positionX += sliderItemWidth;
//             sliderMain.style = `transform: translateX(${positionX}px) `;
//             console.log(index);
//         }
//     }
// });
