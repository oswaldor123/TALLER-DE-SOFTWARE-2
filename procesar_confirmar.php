<?php
    session_start();
    include("conexion.php");
    $nombreperro=$_POST['nombreperro'];
    $nombreusuario=$_POST['nombreusuario'];
    $id=$_POST['idperro'];

    $sql="INSERT INTO adopcion VALUES(null,'$nombreusuario','$nombreperro',SYSDATE())";
    $sql1="DELETE FROM perro WHERE id='$id'";
    $pdo->query($sql);
    $pdo->query($sql1);

    header("Location:adoptar.php");
?>