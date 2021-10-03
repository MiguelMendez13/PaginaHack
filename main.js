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
    let Texto=Estado.options[EstadoSel].text.replace(" ","").toUpperCase().replace(" ","").replace(" ","").replace(" ","")
    console.log(EstadoSel)
    console.log(Texto)
	var form = new FormData();
	form.append("EstadoSeleccionado",EstadoSel);
    form.append("EstadoTexto",Texto);

	urlop="#"
	fetch(urlop,{
			method: "POST",
			body: form,
			headers: {
				"X-CSRFToken": getCookie('csrftoken'),
				"X-Requested-With": "XMLHttpRequest"
			}
	}).then(
			function(response){
				return response.json();
			}
		).then(
            console.log(response)
			/*function (data){

				array_sus = data.NumProductos;
				Tp.innerHTML=array_sus;
				Inputt.value=parseInt(Inputt.value,10)+1;
				tot=parseInt(data.ToTaL);
				Totalll.innerHTML="Total: "+tot;
			}*/
		)


}