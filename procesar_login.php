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

    }
    if($validacion==true){
        header ("Location:index.php");
    }else{
            header ("Location:login.php?error1");
    }
    

?>