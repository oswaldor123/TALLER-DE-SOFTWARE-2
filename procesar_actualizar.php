<?php
    include("conexion.php");
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $correo=$_POST['correo'];
    $tfono=$_POST['tfono'];
    $contra=$_POST['contra'];
    $id=$_POST["id"]; 

    $sql = "UPDATE usuario SET nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2',email='$email',tfono='$tfono',contra='$contra' WHERE id=$id";

    $pdo->query($sql);
    
    header ("Location:index.php");
?>