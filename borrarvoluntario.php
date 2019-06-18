<?php
    session_start();
    include("conexion.php");
    $id=$_POST['id'];

    $sql="DELETE FROM voluntario WHERE idusuario='$id'";

    $pdo->query($sql);

    header("Location:index.php");

?>