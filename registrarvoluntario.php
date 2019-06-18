<?php
session_start();
include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$id=$_POST['id'];

$sql="INSERT INTO voluntario VALUES(null,'$id','$nombre','$apellido',SYSDATE())";

$pdo->query($sql);

header("Location:index.php");
?>