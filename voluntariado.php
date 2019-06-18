<?php
session_start();
include("conexion.php");
$id=$_SESSION["id"];
$sql=$pdo->query("SELECT * FROM voluntario where idusuario='$id'");
$smt=$sql->fetchAll();
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
    ?>
    <?php
    foreach ($smt as $fila) { ?>
        <?php
        if($fila['idusuario']==$id) { ?>
            <form action="borrarvoluntario.php" method="POST">
                <h4> <?php  echo $_SESSION["nombre"],$_SESSION["apellido1"] ?>,usted ya es voluntario de 
                nuestra asociación, ¿Desea salirse del voluntariado?.</h4>
                <p>Al hacer click en el botón dejarán de llegarle mensajes a su correo.</p>
                <input type="hidden" name="id" value="<?php echo $fila['idusuario'] ?>">
                <input type="submit" value="Dejar de ser Voluntario">
            </form>
    <?php } else { ?>
        <form action="registrarvoluntario.php" method="POST">
            <h4>Gracias <?php  echo $_SESSION["nombre"],$_SESSION["apellido1"] ?>,al hacer click se habrá unido como voluntario de 
            nuestra asociación.</h4>
            <p>Le estarán llegando informes a su correo.</p>
            <input type="hidden" name="nombre" value="<?php echo $_SESSION["nombre"] ?>">
            <input type="hidden" name="apellido" value="<?php echo $_SESSION["apellido1"] ?>">
            <input type="hidden" name="id" value="<?php echo $_SESSION["id"] ?>">
            <input type="submit" value="Ser Voluntario">
        </form>
        <?php } ?>
    <?php } ?>
</body>
</html>