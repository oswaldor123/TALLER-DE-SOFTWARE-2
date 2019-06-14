<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Principal</title>
    <link rel="stylesheet" href="hojita.css">
<body>
<?php  
    include ("header.php");
?>
<h3 id="vete">Veterinario</h3>
<div class="presentacion">
    <p>Happy Feet cuenta con servicio de veterinario, conformado por medicos profesionales 
    al mando, cumplen con dar un rapido axilio hacia nusetros perros. </p>
    <div class="segundo">
        <div class="cuadro2">
            <img id="vet" src="imagenes/veterinaria.png" alt="">
        </div>
    </div>
</div>
<form action="POST">
    <div>
        <label for="unom">Nombre de Usuario</label>
        <input type="text" name="unom" id="unom"  REQUIERED placeholder="Obligatorio">
    </div>

    <div>
        <label for="uape">Apellido de Usuario</label>
        <input type="text" name="uape" id="uape"  REQUIERED placeholder="Obligatorio">
    </div>

    <div>
        <label for="utfono">Telefono de Usuario</label>
        <input type="text" name="utfono" id="utfono" REQUIRED placeholder="Teléfono" patternpattern="[0-9]+">
    </div>

    <div>
        <label for="horario">Horarios de atencion</label>
        <p> De 13 a 14 p.m y de 17 a 18 p.m estamos en descanso</p>
        <select name="horario" id="horario">
            <option value="Dia">06:00 a.m -13:00 p.m</option>
            <option value="Tarde">14:00 p.m - 17:00 p.m </option>
            <option value="Noche">18:00 p.m - 21:00 p.m </option>
        </select>
    </div>
</form>

Id (automatico)
Hidden:nombreusuario
Hidden:apellido
Hiden:telefonousuario
Hidden:dbi
Hidden:dia y hora registri
Y tmb que pida que dia y a que hora irias a la consulta
<!-- Como veterinaria que servicios damos?-->


</body>
</html>
