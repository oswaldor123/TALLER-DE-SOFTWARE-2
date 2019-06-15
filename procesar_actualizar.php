<?php
    session_start();
    include("conexion.php");
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $correo=$_POST['correo'];
    $tfono=$_POST['tfono'];
    $contra=$_POST['contra'];
    $id=$_POST['id']; 
    $shacontra=sha1($contra);
    $sql = "UPDATE usuario SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', email='$email', tfono='$tfono', contra='$shacontra' WHERE id='$id'";

    $pdo->query($sql);
    $_SESSION["correo"]=$correo;
    $_SESSION["tfono"]=$tfono;
    $_SESSION["nombre"]=$nombre;
    $_SESSION["apellido1"]=$apellido1;
    $_SESSION["apellido2"]=$apellido2;

    header ("Location:index.php");
?>