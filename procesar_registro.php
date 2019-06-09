<?php
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellido1'];
$apellidom=$_POST['apellido2'];
$correo=$_POST['correo'];
$dni=$_POST['dni'];
$tfono=$_POST['tfono'];
$contra=$_POST['contra'];

$pdo=new PDO("mysql:host=localhost;dbname=happy feet;charset=utf8","root","");

$sql="INSERT INTO usuario values (null,'$nombre','$apellidop','$apellidom','$correo','$dni','$tfono','$contra')";

$pdo->query($sql);

header ("Location:index.php");
?>