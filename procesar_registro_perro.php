<?php
    include("conexion.php");
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $ubicacion=$_POST['ubicacion'];
    $genero=$_POST['genero'];
    $color=$_POST['color'];
    $tamaño=$_POST['tamaño'];
    $edadp=$_POST['edadp'];
    $esterilizado=$_POST['esterilizado'];
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    
    $sql="INSERT INTO perro values(null,'$nombre','$ubicacion','$genero','$color','$tamaño','$edadp','$esterilizado',
    SYSDATE(),'$tipo','$imagen')";

    $pdo->query($sql);

    header("Location:adoptar.php");
?>
