<<<<<<< HEAD
<?php
session_start();
?>
=======
>>>>>>> 1240bc7c7a7e41a94966ec8741990ae9765f92c7
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="stylesheet" href="hojita.css">

</head>
=======
    <title>Página Principal</title>
    <link rel="stylesheet" href="hojita.css">
>>>>>>> 1240bc7c7a7e41a94966ec8741990ae9765f92c7
<body>
<?php  
    include ("header.php");
?>
<<<<<<< HEAD
<h3>Esterilizacion</h3>
<p>Se recomienda esterilizar a su perro, reduciendo problemas como cancer de mama en las hembras y
    problemas de prostata en los machos.
    Para reducir el numero de perros abandonados, Happy Feet 
    incentiva a sus clientes a esterilizarlos de esta manera disminuyendo su cantidad en las calles.
</p>
<p>Si quiere esterilizar a su mascota tiene que separa con tiempo  para confirmar la 
    disponibilidad del veterinario</p>
<form action="registrarcita.php" method="POST">
<h4>Sobre la mascota</h4>
    <div>
        <label for="pnom">Nombre del Perro</label>
        <input type="text" name="pnom" id="pnom" REQUIERED placeholder="Nombre del Perro">
    </div>
    <div>
        <label for="raza">Raza: </label>
        <select name="raza" id="raza" disable>
            <option value="" selected>Todos</option>
            <option value="NS">Sin Especificar</option>
            <option value="Mestizo">Mestizo</option>
            <option value="Alaskan Malamute">Alaskan Malamute</option>
            <option value="American Staffordshire">American Staffordshire</option>
            <option value="Basset Hound">Basset Hound</option>
            <option value="Beagle">Beagle</option>
            <option value="Bichón Maltés">Bichón Maltés</option>
            <option value="Mobtail">Bobtail</option>
            <option value="Boxer">Boxer</option>
            <option value="Branco Alemán">Branco Alemán</option>
            <option value="Bulldog Francés">Bulldog Francés</option>
            <option value="Bulldog Inglés">Bulldog Inglés</option>
            <option value="Bullmastiff">Bullmastiff</option>
            <option value="Cane Corso">Cane Corso</option>
            <option value="Caniche">Caniche</option>
            <option value="Carlino">Carlino</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Chow Chow">Chow Chow</option>
            <option value="Cocker Spaniel">Cocker Spaniel</option>
            <option value="Collie">Collie</option>
            <option value="Dálmata">Dálmata</option>
            <option value="Dobermann">Dobermann</option>
            <option value="Espagneul Breton">Espagneul Bretón</option>
            <option value="Galgo Español">Galgo Español</option>
            <option value="Golden Retriever">Golden Retriever</option>
            <option value="Husky Siberiano">Husky Siberiano</option>
            <option value="Labrador Retriever">Labrador Retriever</option>
            <option value="Leonberguer">Leonberguer</option>
            <option value="Mastín Español">Mastín Español</option>
            <option value="Pastor Alemán">Pastor Alemán</option>
            <option value="Pastor de Brie">Pastor de Brie</option>
            <option value="Perro de Agua Español">Perro de Agua Español</option>
            <option value="San Bernardo">San Bernardo</option>
            <option value="Scottish Terrier">Scottish Terrier</option>
            <option value="Schnauzer Miniatura">Schnauzer Miniatura</option>
            <option value="Setter Inglés">Setter Inglés</option>
            <option value="Teckel">Teckel</option>
            <option value="Terrier de Bedlington">Terrier de Bedlington</option>
            <option value="West Highland Terrier">West Highland Terrier</option>
            <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        </select>
    </div>
    
    <div>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad"  REQUIERED placeholder="Edad" max="18">
    </div>

<h4>Seleccione fecha y hora de la operacion</h4>
    <div>
        <input type="hidden" name="dueño" value="<?php echo $_SESSION["nombre"]?>">
    </div>
    <div>
        <div>
            <label for="dias">Días</label>
            <select name="dias" id="dias">
                <option value="Lunes">Lunes</option>    
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miércoles</option>
                <option value="Jueves">Jueves</option>    
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sábado</option>
                <option value="Domingo">Domingo</option>
            </select>
        </div>
        <div>
            <label for="horas">Horas</label>
            <select name="horas" id="horas">
                <option value="08 a.m - 10 a.m">08 a.m - 10 a.m</option>
                <option value="02 p.m - 6 p.m">02 p.m - 6 p.m</option>
                <option value="6 a.m - 10 p.m">6 a.m - 10 p.m</option>
            </select>
        </div>
    </div>
        <label for="tipo">Tipo de Consulta:</label>
        <select name="tipo" id="tipo">
                <option value="Veterinario">Veterinario</option>
                <option value="Esterilización">Esterilización</option>
        </select>
    <div>
    </div>
    <div>
        <input type="submit" value="Registrar Cita">
    </div>
</form>
</body>
</html>
=======
<h3 id="vete">Veterinario</h3>
<div class="present">
    <p id="pre">Happy Feet cuenta con servicio de veterinario, conformado por medicos profesionales 
    al mando, cumplen con dar un rapido auxilio hacia nusetros perros. </p>
    <div class="segundo">
        <div class="cuadro2">
            <img id="vet" src="imagenes/veterinaria.png" alt="">
        </div>
    </div>
</div>
<form action="POST" id="tabla">
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

</body>
</html>
>>>>>>> 1240bc7c7a7e41a94966ec8741990ae9765f92c7
