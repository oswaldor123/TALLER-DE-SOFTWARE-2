<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Donaciones</title>
</head>
<body>
    <?php
        include ("header.php");
    ?>
    <div class="presentacion">
        <div class="primero">
            <h3>¿Por qué donar?</h3>
            <p>Nosotros como organización sin fines de lucro, buscamos ayudar a aquellos animales
            que no cuentan con un hogar, sin embargo, la ayuda externa siempre será bien recibida.
            Si cuentas con la posibildad de ayudarnos, más abajo en esta página te presentamos un par 
            de alternativas, recuerda: 
            </p>
            <p id="frase">
                "La lealtad de un animal no conocer límites. Ellos nunca te abandonarían,<br> no lo hagas tú."
            </p>
        </div>
        <div class="segundo">
            <div class="cuadro">
                <img src="imagenes/foto.png" alt="" width="100px">
            </div>
        </div>
    </div>
    <div>
    <div class="explora">
            <?php
            if(isset($_SESSION["correo"])) { ?>
            <a href="voluntariado.php">
            <div class="boton" id="voluntario">
                <img src="imagenes/voluntario.png" class="icon">
                <p>Se un Voluntario</p>
            </div>
            </a>
            <a href="#">
            <div class="boton" id="donaciones">
                <img src="imagenes/donar.png" class="icon">
                <p>Donar Bienes</p>
            </div>
            </a>
            <?php } else { ?>
                <a href="#">
            <div class="boton" id="voluntario">
                <img src="imagenes/voluntario.png" class="icon">
                <p>Se un Voluntario</p>
            </div>
            </a>
            <a href="#">
            <div class="boton" id="donaciones">
                <img src="imagenes/donar.png" class="icon">
                <p>Donar Bienes</p>
            </div>
            </a>
            <?php } ?>
        </div>
    </div>
</body>