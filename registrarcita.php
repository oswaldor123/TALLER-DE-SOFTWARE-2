<?php
    session_start();
    if(!isset($_SESSION["nombre"])){
        header("Location:login.php");
    }else{
        include("conexion.php");
        $pnom=$_POST['pnom'];
        $raza=$_POST['raza'];
        $edad=$_POST['edad'];
        $dueño=$_POST['dueño'];
        $dia=$_POST['dias'];
        $hora=$_POST['horas'];
        $tipo=$_POST['tipo'];

        $sql=("INSERT INTO perroconsulta values (null,'$dueño','$pnom','$raza','$edad','$dia','$hora','$tipo',SYSDATE())");

        $pdo->query($sql);

        header("Location:misreservaciones.php");
    }
?>