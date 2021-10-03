/*menu*/
window.onload = load;
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
    
    let ListaMunicipios=document.getElementById("municipio");

    for (let i = ListaMunicipios.options.length; i >= 0; i--) {
        ListaMunicipios.remove(i);
      }


    console.log(EstadoSel)
    console.log(Texto)
	var form = new FormData();
	form.append("EstadoSeleccionado",EstadoSel);
    form.append("EstadoTexto",Texto);

	//urlop="#"

    console.log(form.get("EstadoTexto"));
    urlop="peticionesEstado.php"
	fetch(urlop,{
			method: "POST",
			body: form,
            headers: {
				"X-Requested-With": "XMLHttpRequest"
			}
            
	}).then(res=>res.text())
    .then(data=>{
        console.log(data)
        let lista=data.split(";");
        for(var indice = 1;indice<lista.length;indice++){    
            
            let option=document.createElement("option");
            option.value=indice;
            option.text=lista[indice];
            ListaMunicipios.appendChild(option);
        }
    });


}


function CambiarEmbarazo(){
    if (document.getElementById("sexo").value=="masculino"){
        console.log(document.getElementById("sexo").value)
        $embarazo=document.getElementById("embarazo").disabled=true;
    }
    else if (document.getElementById("sexo").value=="femenino"){
        console.log(document.getElementById("sexo").value)
        $embarazo=document.getElementById("embarazo").disabled=false;
    }
    else if (document.getElementById("sexo").value=="Sexo"){
        console.log(document.getElementById("sexo").value)
        $embarazo=document.getElementById("embarazo").disabled=true;
    }
}
function load() {
    $embarazo=document.getElementById("embarazo").disabled=true;
  }
