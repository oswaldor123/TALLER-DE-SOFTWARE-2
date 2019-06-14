<?php
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellido1'];
$apellidom=$_POST['apellido2'];
$correo=$_POST['correo'];
$dni=$_POST['dni'];
$tfono=$_POST['tfono'];
$contra=$_POST['contra'];

include ("conexion.php");
$co=sha1($contra);
$sql="INSERT INTO usuario values (null,'$nombre','$apellidop','$apellidom','$correo','$dni','$tfono','$co')";

$pdo->query($sql);

header ("Location:index.php");
?>