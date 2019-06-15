<?php
    session_start();
    include("conexion.php");
    $nombre=$_SESSION["nombre"];
    $sql1=$pdo->query("SELECT * FROM perroconsulta where tipo='Veterinario' and nombredueño='$nombre'");
    $smt1=$sql1->fetchAll();
    $sql2=$pdo->query("SELECT * FROM perroconsulta where tipo='Esterilización' and nombredueño='$nombre'");
    $smt2=$sql2->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Mis Reservaciones</title>
</head>
<body>
    <?php
        include("header.php")
    ?>
    <div class="vet">
        <?php
        foreach ($smt1 as $fila) { ?>
            <div>
                <p>Dueño: <?php echo $fila['nombredueño']?> </p>
                <p>Perro: <?php echo $fila['nombreperro']?> </p>
                <p>Raza: <?php echo $fila['raza']?> </p>
                <p>Edad: <?php echo $fila['edad']?> </p>
                <p>Día: <?php echo $fila['dia']?> </p>
                <p>Hora: <?php echo $fila['hora']?> </p>
            </div>
        <?php } ?>
    </div>
    <div class="esterlizar">
    <?php
        foreach ($smt2 as $fila) { ?>
            <div>
                <p>Dueño: <?php echo $fila['nombredueño']?> </p>
                <p>Perro: <?php echo $fila['nombreperro']?> </p>
                <p>Raza: <?php echo $fila['raza']?> </p>
                <p>Edad: <?php echo $fila['edad']?> </p>
                <p>Día: <?php echo $fila['dia']?> </p>
                <p>Hora: <?php echo $fila['hora']?> </p>
            </div>
        <?php } ?>   
    </div>
</body>
</html>