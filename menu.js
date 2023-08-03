const menu = document.querySelector('.menu');
/* HAMBURGUER */

const menu2 = document.querySelector('.menu-navegacion');
/* MENU */

/* console.log(menu2)
console.log(menu) */

menu.addEventListener('click', ()=>{
    menu2.classList.toggle("spread")
})

window.addEventListener('click', e=>{
    if(menu2.classList.contains('spread')
        && e.target != menu2 && e.target!= menu   ){
            menu2.classList.toggle("spread")
    }
})