function searchfunc() {
   let submenu= document. querySelector('#menu-sub');
   let menuitem= Array.from(document.querySelectorAll('.menu_item'));
   submenu.value=submenu.value.tolowercase();

    menuitem.forEach(function(el){
        let text= el.innerText;
        if(text.indextOf(submenu.value)>-1)
        el.style.display="";
        else el.style.display="none";
    })



}
