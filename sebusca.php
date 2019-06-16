<?php
    include("conexion.php");
    $sql=$pdo->query("SELECT * FROM perro WHERE tipo='Se Busca'");
    $u=$sql->fetchAll();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Se Busca</title>
</head>
<body>
    <?php   
        include("header.php");
    ?>
    <div class="presentación-inverso">
        <div class="primero-inverso">
            <img src="imagenes/cartel.png" alt="">
        </div>
        <div class="segundo-inverso">
            <h3>¿Los haz visto?</h3>
            <p>A continuación les presentamos una lista de amigos perdidos, sus familias los extrañan mucho, si haz ubicado a uno, aprovecha
            los datos de  contacto y devuelve la sonrisa a una familia.</p>
            <p>En caso contrario, si haz pérdido a ese amigo especial y quieres ayuda de la familia HF para encontrarlo haz click <a href="registrarperro.php">acá</a></p>
        </div>
    </div>    
    <?php
    foreach ($u as $v) { ?>
       <div class="perroperdido">
            <div class="datosperro">
                <p>Nombre: <?php echo $v['nombre'] ?></p>
                <p>Género: <?php echo $v['genero'] ?></p>
                <p>Edad: <?php echo $v['edad'] ?></p>
                <p>Tamaño: <?php echo $v['tamaño'] ?></p>
                <p>Teléfono de dueño: <?php echo $v["tfono"] ?> </p>
            </div>
            <div class="perroimagen">
                <img src="data:image/jpg;base64,<?php echo base64_encode($v['foto']);?>" alt="">
            </div>
       </div>
    <?php } ?>
</body>
</html>