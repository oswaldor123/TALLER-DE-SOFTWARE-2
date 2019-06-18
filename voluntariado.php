<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>voluntariado</title>
    <link rel="stylesheet" href="hojita.css">
</head>
<body>
    <?php
    include ("header.php");
    include ("conexion.php")
    ?>
    <form action="registrarvoluntario.php" method="POST">
        <h4>Gracias <?php  echo $_SESSION["nombre"],$_SESSION["apellido1"] ?>,al hacer click se habrá unido como voluntario de 
        nuestra asociación.</h4>
        <p>Le estarán llegando informes a su correo.</p>
        <input type="hidden" name="nombre" value="<?php echo $_SESSION["nombre"] ?>">
        <input type="hidden" name="apellido" value="<?php echo $_SESSION["apellido1"] ?>">
        <input type="submit" value="Ser Voluntario">
    </form>
</body>
</html>