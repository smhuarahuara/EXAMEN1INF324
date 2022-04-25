<?php
    if(isset($_GET["v"]))
    {
        $it=".";
    }
    else{
        $it="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultad de ciencias puras y naturales</title>
    <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
    h1{
    color: rgb(19, 48, 76);
    font-size:40px;
    }
    h2{
        color:Black;
        font-size:35px;
    }
    p{
        color:#1f2021;
        padding-left: 1%;
    }
    #p1{
        text-align:justify;
        padding: 1%;
    }
    #cabecera{
        background-color:#4d8daf94; 
        text-align:center; 
        width:100%; 
        float:left;
    }
    #menu{
        background-color:#1751cf; 
        text-align:left; width:20%; 
        float:left;
        padding-bottom: 75%;
        border: 15px;
    }
    #contenido{
        background-color:#213541b7; 
        width:80%; 
        float:left;
    }
    h1{
        text-align: center;
    }
    h3{
        background-color:#020319dc; 
        text-align: center;
    }
    #imagenes{
        text-align: center;
    }
    tr th{
	font-weight:bold;
    }
    td{
        border: 5px solid #061c49b1;
        padding-left: 20px;
        padding-right: 20px;
    }
    .c1{
        background:#4b8c74;
    }
    .c2{
        background:#74c476;
    }
    .c3{
        background:#a4e56d;
    }
    .c4{
        background:#cffc83;
    }
    table{
        margin: 0 auto;
    }
	</style>
    </head>
<body>
    <div id="cabecera">
        <h1>Facultad de Ciencias</h1>
        <h1>puras y naturales</h1>
    </div>
    <div id="menu">
        <h3>Menu</h3>
        <p>Carreras de nuestra institucion:</p>
        <table>
        <?php
            if(isset($_GET["v"])){ 
                echo "<tr>";
                echo "<td><a href='../index.php'>INICIO</a></td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <?php
                    echo "<td><a href='./indexi?v=1'>Informatica</a></td>";
                ?>        
            </tr>
            <tr>
                <?php
                    echo "<td><a href='./indexf?v=1'>Fisica</a></td>";
                ?>  
            </tr>
            <tr>
            <?php
                    echo "<td><a href='./indexq?v=1'>Quimica</a></td>";
                ?>  
            </tr>
            
        </table>

    </div>
    <div id="contenido">
        <br> 
        <h2>Carrera de Fisica</h2>      
        <div id="imagenes">
        <img src="../../images/fisica.jpg" alt="" width="200" heigth="200">
        </div>
        <div>
        <h3>HISTORIA</h3>
        <p id="p1">La Carrera de Física fue creada en 1966, a raíz de las actividades desarrolladas por el Instituto de Investigaciones Físicas y el Laboratorio de Física Cósmica de Chacaltaya desde 1952.</p>
        <h3>ESTRUCTURA</h3>
        <p id="p1">Para la formación de Licenciatura, Maestria y Doctorado, teórico-práctica de profesionales calificados, la Carrera de Física cuenta con:</p>
        <p>Laboratorios de enseñanza.</p>
        <p>Laboratorios de investigación</p> 
        <p>En el Campus Universitario de Cota Cota La Paz .</p>
        <ol>
            <ul>- Laboratorios de Física de la Atmósfera.</ul>
            <ul>- Laboratorio de Ciencia de Materiales, vacío y criogenia.</ul>
            <ul>- Sistemas Complejos</ul>
            <ul>- Laboratorio de computación</ul>
            <ul>- Laboratorio de geomagnetismo y meteorología en Patacamaya.</ul>
            <ul>- Laboratorio de geomagnetismo en Villa Remedios.</ul>
        </ol>
        </div>

        </div>
</body>
</html> 