<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donar Bienes</title>
    <link rel="stylesheet" href="hojita.css">
</head>
<body>
<?php
    include ("header.php");
    include ("conexion.php")
?>
<h3>Donación de Bienes</h3>
<p><?php  echo $_SESSION["nombre"],$_SESSION["apellido1"] ?> nos alegra que se nos unan para ayudar a nuestros 
amigos peludos, para ello, podrá elegir el tipo de bienes que estarán donando.</p>
<form action="registrarbien.php" method="POST">
    <div>
        <label for="tipo">¿Que va donar?</label>
        <select>
            <option value=""></option>
            <option value="Comida">Comida</option>
            <option value="Ropa">Ropa</option>
            <option value="Mueble">Mueble</option>
        </select>
    </div>    
    <div>
        <input type="hidden" name="nombre" value="<?php  echo $_SESSION["nombres"] ?>">
        <input type="hidden" name="apellido" value="<?php  echo $_SESSION["apellido1"] ?>">
    </div>   
    <div>
        <label for="cantidad">Cantidad que donará(Kg o unidades)</label>
        <input type="number" name="cantidad" id="cantidad" pattern="[0-9]" max="100">
    </div> 
    <div>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" REQUIERED placeholder="Descripcion">
    </div>
    <div>
        <input type="submit" value="Donar Bienes">
    </div>
</form>
<div id="hora">
</div>

    
</body>
</html>