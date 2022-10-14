<?php
    require 'baseDeDatos/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<h1>TodoList</h1><br>
    <h3>registrese</h3> 
        o <a href="index.php">inicie sesion</a>
        <form action="registro.php" method="post">
            <input type="text" name="nombre"  placeholder="ingrese su nombre" required>
            <input type="text" name="apellidop"  placeholder="ingrese su apellido paterno" required>
            <input type="text" name="apellidom"  placeholder="ingrese su apellido materno" required>
            <input type="password" name="contraseña" placeholder="ingrese su contraseña" required>
            <input type="password" name="confirm_contraseña" placeholder="confirmar contraseña" required>
            <input type="submit" value="registrar">
        </form>
</body>
</html>