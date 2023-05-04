const img_user=document.querySelector('.img_user');
var ismenu = true;
img_user.addEventListener('click',() => {
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
