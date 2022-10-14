<?php
 require 'baseDeDatos/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

        <h1>TodoList</h1><br>
        <h3>inicie sesion</h3> 
        o <a href="registro.php">registrese</a>
        <form action="index.php" method="post">
            <input type="text" name="email"  placeholder="ingrese su correo" required>
            <input type="password" name="contraseña" placeholder="ingrese su contraseña" required>
            <input type="submit" value="ingresar">
        </form>
    
    
    
</body>
</html>