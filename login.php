<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hojita.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php
    include ("header.php");
    ?>
    <form action="procesar_login.php" method="POST">
        <div>
            <label for=""></label>
            <input type="text">
        </div>
        <div>
            <label for=""></label>
            <input type="text">
        </div>
        <div>
            <input type="submit" value="Iniciar Sessión">
        </div>
    </form>
</body>
</html>