<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
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

    <section class="content-formulario" id="formulario">
        <div class="content inputs">
            <h3>Calcular riesgo</h3>
            <select class="datos" type="text" name="Estado" id="estado" placeholder="Ingrese su estado" rows="32">
                <option class="inputs">Estado</option>
                <option value="Aguascalientes">
                    Aguascalientes
                </option>
                <option value="Baja california">
                    Baja california
                </option>
                <option value="Baja Californi Sur">
                    Baja Californi Sur
                </option>
                <option value="Campeche">
                    Campeche
                </option>
                <option value="Coahuila de Zaragoza">
                    Coahuila de Zaragoza
                </option>
                <option value="Colima">
                    Colima
                </option>
                <option value="Chiapas">
                    Chiapas
                </option>
                <option value="Chihuahua">
                    Chihuahua
                </option>
                <option value="Ciudad de Mexico">
                    Ciudad de Mexico
                </option>
                <option value="Durango">
                    Durango
                </option>
                <option value="Guanajuato">
                    Guanajuato
                </option>
                <option value="Guerrero">
                    Guerrero
                </option>
                <option value="Hidalgo">
                    Hidalgo
                </option>
                <option value="Jalisco">
                    Jalisco
                </option>
                <option value="México">
                    México
                </option>
                <option value="Michoacan de Ocampo">
                    Michoacán de Ocampo
                </option>
                <option value="Morelos">
                    Morelos
                </option>
                <option value="Nayarit">
                    Nayarit
                </option>
                <option value="	Nuevo Leon">
                    Nuevo León
                </option>
                <option value="Oaxaca">
                    Oaxaca
                </option>
                <option value="Puebla">
                    Puebla
                </option>
                <option value="Queretaro">
                    Querétaro
                </option>
                <option value="	Quintana Roo">
                    Quintana Roo
                </option>
                <option value="San Luis Potosí">
                    San Luis Potosí
                </option>
                <option value="	Sinaloa">
                    Sinaloa
                </option>
                <option value="Sonora">
                    Sonora
                </option>
                <option value="Tabasco">
                    Tabasco
                </option>
                <option value="Tamaulipas">
                    Tamaulipas
                </option>
                <option value="Tlaxcala">
                    Tlaxcala
                </option>
                <option value="Veracruz de Ignacio de la Llave">
                    Veracruz de Ignacio de la Llave
                </option>
                <option value="Yucatán">
                    Yucatán
                </option>
                <option value="Zacatecas">
                    Zacatecas
                </option>
            </select>
            <input class="datos" type="text" name="Municipio" id="municipio" placeholder="Ingrese su municipio">
            <input class="datos" type="text" name="CodigoPostal" id="codigopostal" placeholder="Ingrese su codigo postal">
            <input class="datos" type="text" name="Edad" id="edad" placeholder="Ingrese su edad">
            <select class="datos" type="text" name="Sexo" id="sexo" placeholder="Sexo">
                <option>Sexo</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
            <ul class="ul">
                <li class="text-list">Presentas alguna de estas enfermedades:</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="tabaquismo"> Tabaquismo</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="obesidad"> Obesidad</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="cardiovascular"> Cardiovascular</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="hipertension"> Hipertensión</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="epoc"> Epoc</li>
                <li><input class="checkbox" type="checkbox" name="Enfermedad" id="diabetes"> Diabetes</li>
            </ul>
            <select class="datos" type="text" name="Sexo" id="sexo" placeholder="">
                <option>¿Esta embarazada?</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
            <input class="boton" type="submit" value="Calcular">
        </div>
    </section>

    <script src="main.js"></script>
</body>
</html>