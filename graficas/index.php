<?php
$ListaDeEstados=[
	" ",
	"Aguascalientes",
	"Baja california",
	"Baja California Sur",
	"Campeche",
	"Coahuila",
	"Colima",
	"Chiapas",
	"Chihuahua",
	"Ciudad de Mexico",
	"Durango",
	"Guanajuato",
	"Guerrero",
	"Hidalgo",
	"Jalisco",
	"Mexico",
	"Michoacan",
	"Morelos",
	"Nayarit",
	"Nuevo Leon",
	"Oaxaca",
	"Puebla",
	"Queretaro",
	"Quintana Roo",
	"San Luis Potosi",
	"Sinaloa",
	"Sonora",
	"Tamaulipas",
	"Tlaxcala",
	"Veracruz",
	"Yucatán",
	"Zacatecas"];
	$diabetisRES=[470525, 24730, 445795];

	//diabetes 5.255831252324531 % Muertes  94.74416874767547 % vivos
	$hipertencionRES=[661941, 28745, 633196];
	//hipertension 4.3425320383538715 % Muertes  95.65746796164613 % vivos
	$cardiovascularesRES=[67836, 5246, 62590];
	//cardiovasculares 7.733356919629695 % Muertes  92.2666430803703 % vivos
	$obesidadRES=[573407, 10514, 562893];
	//obesidad 1.8336016128160277 % Muertes  98.16639838718397 % vivos
	$tabaquismoRES=[503841, 6371, 497470];
	//tabaquismo 1.264486216881913 % Muertes  98.73551378311808 % vivos
	$epocRES=[44200, 4501, 39699];
	//epoc 10.183257918552036 % Muertes  89.81674208144797 % vivos
	$asmaRES=[145108, 1178, 143930];
	//asma 0.8118091352647683 % Muertes  99.18819086473523 % vivos
	$embarazoRES=[65841, 88, 65753];
	//embarazo 0.1336553211524734 % Muertes  99.86634467884753 % vivos





/*foreach ($_GET as $valor) {
	echo$valor."<br>";
}*/




$estado=intval($_GET["estado"]);
$municipio=$_GET["municipio"];
$RiesgoEdad="";
$edad=$_GET["edad"];

if($edad>=0 and $edad<=20){
	$RiesgoEdad="<font color='green'> riesgo bajo,<br> aun asi te invitamos a que te sigas cuidando</font>";
}
else if($edad>=21 and $edad<=50){
	$RiesgoEdad="<font color='yellow'> riesgo medio,<br> tu edad se encuentra dentro de un alto riesgo de contagio, <br>pero medio riesgo de complicacion</font>";
}

else if($edad>=51){
	$RiesgoEdad="<font color='red'> riesgo alto,<br> tu edad se encuentra dentro de un bajo riesgo de contagio, <br>pero alto riesgo de complicacion</font>";
}
$sexo=$_GET["sexo"];
$enfermedades=$_GET["enfermedades"];
$embarazo=intval($_GET["embarazo"]);
$EstadoElegidoText=strtoupper($ListaDeEstados[$estado]);
$EstadoElegidoText2=str_replace(" ","",$EstadoElegidoText);
/*echo "estado:";
echo $EstadoElegidoText2;*/
	$fp = fopen("../MUNICIPIOSTEXT.JSON", "r");
$linea="";
while (!feof($fp)){
$linea = $linea.fgets($fp);
}
fclose($fp);
$ListaMuni=json_decode($linea);

$muniEstados=$ListaMuni->{$EstadoElegidoText2};
$EstadosCadena=$EstadoElegidoText.":1";
foreach($muniEstados as $municipi){
	$EstadosCadena=$EstadosCadena.$municipi."1";
}
/*echo $EstadosCadena;*/

$num=0;
$Graficar=explode("1",$enfermedades);
if($embarazo==1){
	$Graficar[count($Graficar)-1]="Embarazo";
}
else if($embarazo==2){
	$Graficar[count($Graficar)-1]="No Embarazo";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  type="text/css" href="graficas.css">

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<title>Document</title>

</head>
<body>

<section class="content-graphics" id="resultados">
<div id="estado"><br><br><br>Historico de personas con covid en tu estado: <?php echo $EstadoElegidoText;?></div>
<div class="container graphic-estado" ><canvas id="Estados" width="100" height="75"></canvas></div>


<div id="EdadText">Tu edad: <?php echo $edad.$RiesgoEdad; ?></div>
<div class="container graphic-age" ><canvas id="Edad" width="100" height="75"></canvas></div>
<?php
foreach($Graficar as $gra){
	echo $gra;
	if($gra == "Diabetes"){
		echo'<div class="container graphic-pmDiabetes" ><canvas id="pmDiabetes" width="100" height="75"></canvas></div>';
	}
	
	else if($gra == "Epoc"){
		echo '	<div class="container graphic-pmEpoc" ><canvas id="pmEpoc" width="100" height="75"></canvas></div>  ';
	}

	else if($gra == "Hipertension"){
		echo '<div class="container graphic-pmHipert" ><canvas id="pmHipert" width="100" height="75"></canvas></div>';
	}

	else if($gra == "Cardiovascular"){
		echo '	<div class="container graphic-pmCardio" ><canvas id="pmCardio" width="100" height="75"></canvas></div>';
	}

	else if($gra == "Obesidad"){
		echo '<div class="container graphic-pmObses" ><canvas id="pmObses" width="100" height="75"></canvas></div> ';
	}

	else if($gra == "Tabaquismo"){
		echo'<div class="container graphic-pmTab" ><canvas id="pmTab" width="100" height="75"></canvas></div> ';
	}

	else if($gra == "Embarazo"){
		echo'<div class="container graphic-pmEmb" ><canvas id="pmEmb" width="100" height="75"></canvas></div>';
	}

}
?>







</section>
</body>
<script src="graficas.js"></script>
<script>estado_Municipio(<?php echo $estado.",'".$EstadosCadena."'";?>)</script>
<script>GraficasEdades()</script>

<?php
foreach($Graficar as $gra){
	if($gra == "Diabetes"){
		echo("<script>".$gra."()</script>");
	}
	
	else if($gra == "Epoc"){
		echo("<script>".$gra."()</script>");
	}

	else if($gra == "Hipertension"){
		echo("<script>".$gra."()</script>");
	}

	else if($gra == "Cardiovascular"){
		echo("<script>".$gra."()</script>");
	}

	else if($gra == "Obesidad"){
		echo("<script>".$gra."()</script>");
	}

	else if($gra == "Tabaquismo"){
		echo("<script>".$gra."()</script>");
	}

	else if($gra == "Embarazo"){
		echo("<script>".$gra."()</script>");
	}
}
?>

</html>