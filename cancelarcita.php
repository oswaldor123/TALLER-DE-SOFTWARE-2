<?php
    session_start();
    include("conexion.php");
    $id=$_GET['id'];

    $sql="DELETE FROM perroconsulta WHERE id='$id'";

    $pdo->query($sql);

    header("Location:misreservaciones.php");
?>