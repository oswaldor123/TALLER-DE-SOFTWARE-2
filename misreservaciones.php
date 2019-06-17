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
    <div class="presentacion">
        <div class="primero">
            <h2 id="titulo">Mis Reservaciones</h2>
            <p>Buenas <?php echo $_SESSION["nombre"] ?>, acá te mostramos las reservaciones de salud que haz realizado con nuestra web.</p>
            <p>Si no haz realizado alguna haz click en el bóton Cancelar</p>
        </div>
        <div class="segundo">
            <img src="imagenes/reservaciones.png" alt="" width="400px" id="unico">
        </div>
    </div>
    <div class="cita">
        <h4>Mis Citas Veterinarias</h4>
        <?php
        foreach ($smt1 as $fila) { ?>
            <div class="factura">
                <p>Dueño: <?php echo $fila['nombredueño']?> </p>
                <p>Perro: <?php echo $fila['nombreperro']?> </p>
                <p>Raza: <?php echo $fila['raza']?> </p>
                <p>Edad: <?php echo $fila['edad']?> años </p>
                <p>Día: <?php echo $fila['dia']?> </p>
                <p>Hora: <?php echo $fila['hora']?> </p>
                <a href="cancelarcita.php?id=<?php echo $fila['id']?>">Cancelar Cita</a>
            </div>
        <?php } ?>
    </div>
    <div class="cita">
        <h4>Para Esterilizar</h4>
        <?php
        foreach ($smt2 as $fila) { ?>
        <div class="factura">
            <p>Dueño: <?php echo $fila['nombredueño']?> </p>
            <p>Perro: <?php echo $fila['nombreperro']?> </p>
            <p>Raza: <?php echo $fila['raza']?> </p>
            <p>Edad: <?php echo $fila['edad']?> años </p>
            <p>Día: <?php echo $fila['dia']?> </p>
            <p>Hora: <?php echo $fila['hora']?> </p>
            <a href="cancelarcita.php?id=<?php echo $fila['id']?>">Cancelar Cita</a>
        </div>
        <?php } ?>   
    </div>
</body>
</html>