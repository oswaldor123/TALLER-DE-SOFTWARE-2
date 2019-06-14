<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <?php
        include ("header.php");
    ?>
    <form action="procesar_registro.php" method="post">
        <center>
        <img src="imagenes/logohf.png" alt="" width="100px">
        <h1>Registrar </h1>
        </center>
        <div>
            <input type="text" name="nombre" id="nombre" REQUIRED placeholder="Nombre" pattern="[A-Za-z]+">
        </div>
        <div>
            <input type="text" name="apellido1" id="apellido1" REQUIRED placeholder="Apellido Materno" pattern="[A-Za-z]+">
            <input type="text" name="apellido2" id="apellido2" REQUIRED placeholder="Apellido Paterno" pattern="[A-Za-z]+">
        </div>
        <div>
            <input type="email" name="correo" id="correo" REQUIRED placeholder="ejemplo@ejemplo.com">
        </div>
        <div>
            <input type="text" name="dni" id="dni" REQUIRED placeholder="Número de DNI" pattern="[0-9]+">
        </div>
        <div>
            <input type="text" name="tfono" id="tfono" REQUIRED placeholder="Número de Teléfono" patternpattern="[0-9]+">
        </div>
        <div>
            <input type="password" name="contra" id="contra" REQUIRED placeholder="Contraseña">
        </div>
        <input type="submit" value="Registar Usuario">
    </form>
</body>
</html>