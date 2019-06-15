<?php
    include("conexion.php");
    $sql=$pdo->query("SELECT * FROM perro WHERE tipo='Para Adoptar'");
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
    <title>Adopta</title>
</head>
<body>
    <?php
        include ("header.php");
    ?>
    <div class="presentacion">
    <div class="primero">
        <h2>Adopta a tu nuevo amigo</h2>
        <p>Acá te presentamos una variedad de perros que viven en nuestro albergue, conócelos a todos y si esta en tus posibilidades
         adopta a uno, se la familia que ellos tanto anhelan.</p>
         <p id="frase">
                "Si nunca haz tenido un perro, no sabrás lo que es que te<br> den cariño sin pedirte nada a cambio."
        </p>
    </div>
    <div class="segundo">
            <div class="cuadro">
                <img src="imagenes/perroplato.png" alt="">
            </div>
        </div>
    </div>
    <?php
    foreach ($u as $v) { ?>
       <p>nombre:<?php echo $v['nombre'] ?></p>
       <p>Genero:<?php echo $v['genero'] ?></p>
       <p>Edad:<?php echo $v['edad'] ?></p>
       <p>Tamaño:<?php echo $v['tamaño'] ?></p>
       <img src="data:image/jpg;base64,<?php echo base64_encode($v['foto']);?>" alt="">
    <?php } ?>
    <div>
    </div>
</body>
</html>