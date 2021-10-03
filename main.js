/*menu*/

const hamburguer = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

hamburguer.addEventListener('click',()=>{
    menu.classList.toggle("show-menu")
})

window.addEventListener('click',e=>{
    if(menu.classList.contains('show-menu') 
        && e.target != menu && e.target != hamburguer){
        menu.classList.toggle("show-menu")
    }
})



function CambiarMunicipios(){
    let Estado = document.getElementById("estado");
    let EstadoSel= Estado.value
    let res= document.getElementById("Resultado")
    res.innerHTML = EstadoSel
}