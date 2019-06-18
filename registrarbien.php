<?php
session_start();
include("conexion.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$tipo=$_POST["tipo"];
$cantidad=$_POST["cantidad"];
$descripcion=$_POST["descripcion"];


$sql="INSERT INTO bien VALUES(null,'$nombre','$apellido',$tipo','$cantidad','$descripcion',SYSDATE())";

$pdo->query($sql);

header("Location:index.php");
?>