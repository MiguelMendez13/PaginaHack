<?php
//echo $_POST["EstadoSeleccionado"];
//echo $_POST["EstadoTexto"];
$json1="";
$jsonREs=array(
    "clave1"  => "valor1",
    "clave2"  => "valor2",
    "clave3"  => "valor3",
    "clave4"  => "valor4",
);



    $fp = fopen("MUNICIPIOSTEXT.JSON", "r");
	$linea="";
	while (!feof($fp)){
		$linea = $linea.fgets($fp);
		#echo $linea;
	}
	fclose($fp);
	$ListaMuni=json_decode($linea);
		//var_dump($ListaMuni);
	$elemento=$ListaMuni->{$_POST["EstadoTexto"]};
    foreach ($elemento as $valor) {
        $json1 = $json1.";".$valor;
    }

        echo json_encode($json1);
	/*if(isset($_POST["EstadoSeleccionado"]) and isset($_POST["EstadoTexto"])){
		echo("lol");
		$fp = fopen("MUNICIPIOSTEXT.JSON", "r");
		$linea="";
		while (!feof($fp)){
			$linea = $linea.fgets($fp);
			#echo $linea;
		}
		fclose($fp);
		$ListaMuni=json_decode($linea);
		//var_dump($ListaMuni);
		echo $ListaMuni->{$_POST["EstadoTexto"]}[1];
		echo json_encode($ListaMuni->{$_POST["EstadoTexto"]}[1]);
	}*/
?>