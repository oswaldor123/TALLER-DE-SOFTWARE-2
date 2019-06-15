<?php
    session_start();
    include("conexion.php");
    $id=intval($_GET["id"]);
    $sql="SELECT * FROM perro WHERE id='$id'";
    $co=$pdo->query($sql);
    $c=$co->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Confirmar Adopción</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <?php
        echo $id;
    ?>
    <form action="procesar_confirmar.php" method="POST">
        <input type="hidden" name="idperro" value="<?php echo $c['id'] ?>">
        <input type="hidden" name="nombreperro" value="<?php echo $c['nombre']?>">
        <input type="hidden" name="nombreusuario" value="<?php echo $_SESSION["nombre"] ?> ">
        <input type="submit" value="Confirmar Adopción">
    </form>
</body>
</html>