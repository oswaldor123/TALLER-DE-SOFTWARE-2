<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="hojita.css">
</head>
<body>
    <?php  
        include ("header.php");
    ?>
    <div class="slider">
        <ul>
            <li>
                <img src="imagenes/perro1.png" alt="">
            </li>
            <li>
                <img src="imagenes/perro2.png" alt="">
            </li>
            <li>
                <img src="imagenes/perro 3.png" alt="">
            </li>
            <li>
                <img src="imagenes/perro4.png" alt="">
            </li>
        </ul>
    </div>
    <div class="presentacion">
        <div class="primero">
            <h3>¿Quiénes somos?</h3>
            <p>
                Somos una organización amante de los animales, que busca brindarle
                una mejor calidad a todos esos amigos de 4 patas.
            </p>
            <h3>Misión</h3>
            <p>
                Trabajamos con la comunidad para crear un sistema que permita brindarle
                los cuidados básicos a todos los animales en situación de riesgo, 
                buscando reducir el número de animales en las calles.
            </p>
            <h3>Visión</h3>
            <p>
                Llegar a ser un aplicativo empleado a nivel internacional, para poder
                ayudar a todos aquellos animales que se encuentren sin hogar, 
                brindándoles los cuidados adecuados hasta que encuentren una familia.
            </p>
        </div>
        <div class="segundo">
            <div class="cuadro">
                <img src="imagenes/amigo2.png" alt="" height="70px">
            </div>
        </div>
    </div>
    <div class="explorador">
        <a href="#">
            <div class="botones" id="uno">
                <img src="imagenes/registr.png" class="icono">
                <p>Registrar Mascota</p>
            </div>
        </a>
        <a href="#"></a>
            <div class="botones" id="dos">
                <img src="imagenes/adopta.png" class="icono">
                <p>Adopta</p>
            </div>
        </a>
        <a href="#">
            <div class="botones" id="tres">
                <img src="imagenes/se busca.png" class="icono">
                <p>Se Busca</p> 
            </div>
        </a>
        <a href="#">
            <div class="botones" id="cuatro">
                <img src="imagenes/veterinario.png" class="icono">
                <p>Veterinario</p> 
            </div>
        </a>
        <a href="">
            <div class="botones" id="cinco">
                <img src="imagenes/esterilizacion.png" class="icono">
                <p>Esterilización</p>  
            </div>
        </a>
        <a href="donaciones.php">
            <div class="botones" id="seis">
                <img src="imagenes/donacion.png"  class="icono">
                <p>Donaciones</p>
            </div>
        </a>
    </div>
</body>
</html>