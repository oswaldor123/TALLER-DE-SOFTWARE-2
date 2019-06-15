<?php
    $correo=$_POST['correo'];
    $contra=$_POST['contra'];
    $c1=sha1($contra);         /*CODIFICA LA CONTRASEÑA*/
    $validacion=false;
    include ("conexion.php");
    $sql="SELECT * FROM usuario where email='$correo' and contra='$c1' ";
    $stmt=$pdo->query($sql);
    $usu=$stmt->fetchAll();
    if (count($usu)==1){
        $validacion=true;
        $usser=$usu[0];
        session_start();
            $_SESSION["correo"]=$usser["email"];
            $_SESSION["id"]=$usser["id"];
            $_SESSION["tfono"]=$usser["tfno"];
            $_SESSION["nombre"]=$usser["nombre"];
            $_SESSION["apellido1"]=$usser["apellido1"];
            $_SESSION["apellido2"]=$usser["apellido2"];
            $_SESSION["dni"]=$usser["dni"];

    }
    if($validacion==true){
        header ("Location:index.php");
    }else{
            header ("Location:login.php?error1");
    }
    

?>