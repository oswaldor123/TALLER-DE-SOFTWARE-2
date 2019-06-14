<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">

</head>
<body>
<?php  
    include ("header.php");
?>
<h3>Esterilizacion</h3>
<p>Se recomienda esterilizar a su perro, reduciendo problemas como cancer de mama en las hembras y
    problemas de prostata en los machos.
    Para reducir el numero de perros abandonados, Happy Feet 
    incentiva a sus clientes a esterilizarlos de esta manera disminuyendo su cantidad en las calles.
</p>
<p>Si quiere esterilizar a su mascota tiene que separa con tiempo  para confirmar la 
    disponibilidad del veterinario</p>
<form action="" method="POST">

<h4>Sobre el dueño</h4>
    <div>
        <label for="unom">Nombre de Usuario</label>
        <input type="text" name="unom" id="unom"  REQUIERED placeholder="Obligatorio">
    </div>

    <div>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni"  REQUIERED placeholder="Documento de Identidad">
    </div>

<h4>Sobre la mascota</h4>
    <div>
        <label for="pnom">Nombre del Perro</label>
        <input type="text" name="pnom" id="pnom" REQUIERED placeholder="Obligatiorio">
    </div>
    <div>
        <label for="raza">Raza: </label>
        <select name="razas" id="razas" disable>
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
        <label for="edad_esteril">Edad:</label>
        <input type="text" name="edad_esteril" id="edad_esteril"  REQUIERED placeholder="Edad">
    </div>

<h4>Seleccione fecha y hora de la operacion</h4>
    <div>
        <div>
            <label for="ls">Lunes a Sabado</label>
            <select name="ls" id="ls">
                <option value="" REQUIERED></option>    
                <option value="dia">09 a.m - 11 a.m</option>
                <option value="tarde">15 p.m - 17 p.m</option>
            </select>
        </div>
        
        <div>
            <label for="do">Domingo</label>
            <select name="do" id="do">
            <option value="" REQUIERED></option>    
            <option value="dia">08 a.m - 10 a.m</option>

        </div>
    </div>

    <div>
        <label for="fecha">Fecha de operacion: </label>
        <input type="date">
    </div>

    <div>
        <label for="hora">Hora de operacion</label>
        <input type="time">
    </div>

    <div>
        <input type="submit" value="Registrar Esterilizacion">
    </div>
</form>
</body>
</html>