
const menu_room=document.getElementById('my_menu');
var ismenu1 = true;
menu.addEventListener('click',()=>{
 var caption = document.querySelector('.nav_menuroom');

   if(ismenu){
       caption.style.display = 'block';
       ismenu1 = false;
   }
   else{
       caption.style.display = 'none';
       ismenu1 = true;
   }
});