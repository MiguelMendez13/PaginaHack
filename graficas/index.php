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





foreach ($_GET as $valor) {
	echo$valor."<br>";
}
$estado=intval($_GET["estado"]);
$municipio=$_GET["municipio"];
$edad=$_GET["edad"];
$sexo=$_GET["sexo"];
$enfermedades=$_GET["enfermedades"];
$embarazo=$_GET["embarazo"];
$EstadoElegidoText=strtoupper($ListaDeEstados[$estado]);
$EstadoElegidoText2=str_replace(" ","",$EstadoElegidoText);
echo "estado:";
echo $EstadoElegidoText2;
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
echo $EstadosCadena;
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
<div class="container graphic-estado" ><canvas id="Estados" width="100" height="75"></canvas></div>

</body>
<script src="graficas.js"></script>
<script>estado_Municipio(<?php echo $estado.",'".$EstadosCadena."'";?>)</script>
</html>