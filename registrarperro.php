<?php
date_default_timezone_set("America/Lima"); /*ESTO ES PARA ESTABLECER ZONA HORARIA*/
$fecha=date("d/n/y");/*Aca estamos creando la variable fecha*/
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Registrar Perro</title>
</head>
<body id="color1">
    <?php
        include("header.php");
    ?>
    <div class="presentador">
        <h3 id="gaa">¿Quieres traer un perro a nuestro albergue?</h3>
        <p id="gaa1">Estamos capacitados para recibir a cualquier raza de perros, si tienes conocimiento 
            de algún animal que la esta pasando mal, no dudes en registrarla acá. Para ello, llena 
            el siguiente formulario y marca la opcion para adoptar para registrar al perro en el albergue.
        </p>
    </div>
    <h3 id="gaaa">¿se te ha perdido una mascota?</h3>
    <p id="gaaa1">como forma de ayudar a la comunidad HF brinda la oportunidad de registrar una mascota perdida
    para que nos ayudemos entre nosotros a encontrar ese mienbro de la familia que falta. Llena el siguiente
    formulario y marca la opcion se busca para identificar que es una mascota perdida</p>
    <!-- Los datos para registrar perro son:
        id
        donde lo encontro
        edad
        fecharegistro
        foto-->
    <form action="procesar_registro_perro.php" method="POST" id="tabla" enctype="multipart/form-data">
    <div>
            <label for="nombre">Escribe su nombre</label>
            <input type="text" name="nombre" id="nombre" REQUIERED placeholder="Nombre del can">
        </div>
        <div>
            <label for="ubicacion">¿Donde lo encontró/perdió?</label>
            <input type="text" name="ubicacion" id="ubicacion" REQUIERED placeholder="Distrito">
        </div>
        <div>
            <label for="genero">Género</label>
            <select name="genero" id="genero" placeholder="Elija su opción">
                <option value="MACHO">Macho</option>
                <option value="HEMBRA">Hembra</option>
            </select>
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" REQUIERED placeholder="Color">
        </div>
        <div>
            <label for="tamaño">Tamaño</label>
            <select name="tamaño" id="tamaño">
                <option value=""></option>
                <option value="Cachorro">Mini(hasta 5kg)</option>
                <option value="Joven">Chico(6-10kg)</option>
                <option value="Maduro">Mediano(11-25kg)</option>
                <option value="Grande">Grande(26-35kg)</option>
                <option value="Gigante">Gigante(mas de 36kg)</option>
            </select>
        </div>
        <div>
            <label for="edadp">Seleccione edad del can:</label>
            <select name="edadp" id="edadp">
                <option value="Cachorro">Cachorro</option>
                <option value="Joven">Joven</option>
                <option value="Maduro">Maduro</option>
            </select>
        </div>
        <div>
            <label for="esterilizado">Esterilizado</label>
            <select name="esterilizado" id="esterilizado" placeholder="Elija una opción">
                <option value=""></option>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
                <option value="NO SE">Desconozco</option>
            </select>
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name="imagen" id="imagen">
        </div>
        <div>
        <label for="tipo">Tipo de Registro</label>
            <select name="tipo" id="tipo" placeholder="Elija una opción">
                <option value="Se Busca">Se Busca</option>
                <option value="Para Adoptar">Para Adoptar</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Registrar Perro">
        </div>
    </form>
    <img src="imagenes/perrito.png" height="350px" width="27%" id="imagenp">
    <img src="imagenes/perros1.png" width="27%" id="imagenp1">
    
</body>
</html>