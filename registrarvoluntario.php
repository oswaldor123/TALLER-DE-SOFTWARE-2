<?php
session_start();
include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$sql="INSERT INTO voluntario VALUES(null,'$nombre','$apellido',SYSDATE())";

$pdo->query($sql);

header("Location:index.php");
?>