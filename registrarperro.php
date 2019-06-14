<?php
date_default_timezone_set("America/Lima"); /*ESTO ES PARA ESTABLECER ZONA HORARIA*/
$fecha=date("d/n/y");/*Aca estamos creando la variable fecha*/
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
<body>
    <?php
        include("header.php");
    ?>
    <div class="presentador">
        <h3>¿Quieres traer un perro a nuestro albergue?</h3>
        <p>Estamos capacitados para recibir a cualquier raza de perros, si tienes conocimiento 
            de algún animal que la esta pasando mal, no dudes en registrarla acá. Para ello, llena 
            el siguiente formulario.</p>
    </div>
    <!-- Los datos para registrar perro son:
        id
        donde lo encontro
        edad
        fecharegistro
        foto-->
    <form action="" method="POST">
        <div>
            <label for="ubicacion">¿Donde lo encontró?</label>
            <input type="text" name="ubicacion" id="ubicacion" REQUIERED placeholder="Distrito">
        </div>
        <div>
            <label for="edadp">Seleccione edad del can:</label>
            <select name="edadp" id="edadp">
                <option value="cachorro">Cachorro</option>
                <option value="joven">Joven</option>
                <option value="maduro">Maduro</option>
            </select>
        </div>
        <div>
            <button>Subir Foto</button>
            <label for="foto">Foto</label>
        </div>
        <div>
            <input type="hidden" name="fecharegistro" value=$fecha>
        </div>
        <div>
            <input type="submit" value="Registrar Perro">
        </div>
    </form>
</body>
</html>