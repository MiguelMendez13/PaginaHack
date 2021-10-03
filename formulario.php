<?php

	if(isset($_POST["Estado"]) and $_POST["Estado"]!="Estado" and isset($_POST["Municipio"]) and isset($_POST["Edad"]) and isset($_POST["Sexo"]) and $_POST["Sexo"]!="Sexo" ){
		echo strval($_POST["Estado"])."<br>";
		echo strval($_POST["Municipio"])."<br>";
		echo strval($_POST["Edad"])."<br>";
		echo strval($_POST["Sexo"])."<br>";
		echo strval($_POST["Municipio"]);

		$enfermedades=[];
		if(isset($_POST["EnfermedadTabaquismo"])){
			$enfermedades[]="Tabaquismo";
		}
		if(isset($_POST["EnfermedadObesidad"])){
			$enfermedades[]="Obesidad";
		}
		if(isset($_POST["EnfermedadCardiovascular"])){
			$enfermedades[]="Cardiovascular";
		}
		if(isset($_POST["EnfermedadHipertension"])){
			$enfermedades[]="Hipertension";
		}
		if(isset($_POST["EnfermedadEpoc"])){
			$enfermedades[]="Epoc";
		}
		if(isset($_POST["EnfermedadDiabetes"])){
			$enfermedades[]="Diabetis";
		}
		echo "enfermedades<br>";
		foreach ($enfermedades as $valor) {
			echo $valor."<br>";
		}
		





		
		//$fp = fopen("municipios.json", "r");
		$fp = fopen("MUNICIPIOSTEXT.JSON", "r");
		$linea="";
		while (!feof($fp)){
			$linea = $linea.fgets($fp);
			#echo $linea;
		}
		fclose($fp);
		$ListaMuni=json_decode($linea);
		//var_dump($ListaMuni);
		//echo $ListaMuni->{"AGUASCALIENTES"}[1];
	}
	else{
		echo "Verifica tus Datos";
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Document</title>

	<script src="main.js"></script>

</head>
<body>
	<header id="home">

		<img src="img/menu.svg" alt="" class="menu-icon">         
		<nav class="menu">
			<a href="#home">Home</a>
			<a href="#formulario">Formulario</a>
			<a href="#resultado">Estadistica de riesgo</a>  
		</nav>
		<div class="content">
			<h1 class="title">COVID-19: Calculate the Risk</h1>
		</div>  
</header>
<form method="post" action="#">
	<section class="content-formulario" id="formulario">
		<div class="content inputs">
			<h3>Calcular riesgo</h3>
			<select class="datos" type="text" name="Estado" id="estado" placeholder="Ingrese su estado" rows="32" onChange="CambiarMunicipios()">
				<option class="inputs">Estado</option>
				<option value="1">
					Aguascalientes
				</option>
				<option value="2">
					Baja california
				</option>
				<option value="3">
					Baja California Sur
				</option>
				<option value="4">
					Campeche
				</option>
				<option value="5">
					Coahuila de Zaragoza
				</option>
				<option value="6">
					Colima
				</option>
				<option value="7">
					Chiapas
				</option>
				<option value="8">
					Chihuahua
				</option>
				<option value="9">
					Ciudad de Mexico
				</option>
				<option value="10">
					Durango
				</option>
				<option value="11">
					Guanajuato
				</option>
				<option value="12">
					Guerrero
				</option>
				<option value="13">
					Hidalgo
				</option>
				<option value="14">
					Jalisco
				</option>
				<option value="15">
					México
				</option>
				<option value="16">
					Michoacán de Ocampo
				</option>
				<option value="17">
					Morelos
				</option>
				<option value="18">
					Nayarit
				</option>
				<option value="19">
					Nuevo León
				</option>
				<option value="20">
					Oaxaca
				</option>
				<option value="21">
					Puebla
				</option>
				<option value="22">
					Querétaro
				</option>
				<option value="23">
					Quintana Roo
				</option>
				<option value="24">
					San Luis Potosí
				</option>
				<option value="25">
					Sinaloa
				</option>
				<option value="26">
					Sonora
				</option>
				<option value="27">
					Tabasco
				</option>
				<option value="28">
					Tamaulipas
				</option>
				<option value="29">
					Tlaxcala
				</option>
				<option value="30">
					Veracruz de Ignacio de la Llave
				</option>
				<option value="31">
					Yucatán
				</option>
				<option value="32">
					Zacatecas
				</option>
			</select>
			<select class="datos" type="text" name="Municipio" id="municipio" placeholder="Ingrese su municipio">
			<input class="datos" type="text" name="CodigoPostal" id="codigopostal" placeholder="Ingrese su codigo postal">
			<input class="datos" type="number" name="Edad" id="edad" placeholder="Ingrese su edad">
			<select class="datos" type="text" name="Sexo" id="sexo" placeholder="Sexo">
				<option>Sexo</option>
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>
			</select>
			<ul class="ul">
				<li class="text-list">Presentas alguna de estas enfermedades:</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadTabaquismo" id="tabaquismo"> Tabaquismo</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadObesidad" id="obesidad"> Obesidad</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadCardiovascular" id="cardiovascular"> Cardiovascular</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadHipertension" id="hipertension"> Hipertensión</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadEpoc" id="epoc"> Epoc</li>
				<li><input class="checkbox" type="checkbox" name="EnfermedadDiabetes" id="diabetes"> Diabetes</li>
			</ul>
			<select class="datos" type="text" name="embarazo" id="sexo" placeholder="">
				<option>¿Esta embarazada?</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
			<input class="boton" type="submit" value="Calcular">
		</div>
	</section>
</form>
	<span id="Resultado"></span>
</body>
</html>



