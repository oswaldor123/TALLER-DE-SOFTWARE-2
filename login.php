<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php
    include ("header.php");
    ?>
    <form action="procesar_login.php" method="POST">
    <h2>Iniciar Sesión</h2>
        <div>
            <label for=""></label>
            <input type="email" name="correo" id="correo" placeholder="Correo" REQUIERED>
        </div>
        <div>
            <label for=""></label>
            <input type="text" name="contra" id="contra" placeholder="Contraseña"REQUIERED>
        </div>
        <div>
            <input type="submit" value="Iniciar Sessión">
        </div>
        <div>
            <p>¿No tienes cuenta?, haz click <a href="registro.php">aquí</a></p>
        </div>
    </form>

</body>
</html>