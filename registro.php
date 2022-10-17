<?php
    require 'baseDeDatos/db.php';
    $mensaje="";
    

    if (!empty($_POST['nombre']) && !empty($_POST['apellidop'])&& !empty($_POST['apellidom'])&& !empty($_POST['email'])&& !empty($_POST['password'])&& !empty($_POST['confirm_pass'])) {
        if($_POST['password']===$_POST['confirm_pass']){

        
        $sql = "INSERT INTO tusuario (nombre, apellidop, apellidom, email, password) VALUES (:nombre, :apellidop, :apellidom, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellidop', $_POST['apellidop']);
        $stmt->bindParam(':apellidom', $_POST['apellidom']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        if($stmt->execute()){
            $mensaje="usuario creado correctamente";
        }else{
            $mensaje="error en la creacion de usuario";

        }
    }else{
            $mensaje="las contraseñas no coinciden";
        }
}
        

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
<?php if(!empty($mensaje)): ?>
      <p> <?= $mensaje ?></p>
    <?php endif; ?>
    <h3>registrese</h3> 
        o <a href="index.php">inicie sesion</a>
        <form action="registro.php" method="POST">
            <input type="text" name="nombre"  placeholder="ingrese su nombre" required>
            <input type="text" name="apellidop"  placeholder="ingrese su apellido paterno" required>
            <input type="text" name="apellidom"  placeholder="ingrese su apellido materno" required>
            <input type="text" name="email"  placeholder="ingrese su correo" required>
            <input type="password" name="password" placeholder="ingrese su contraseña" required>
            <input type="password" name="confirm_pass" placeholder="confirmar contraseña" required>
            <input type="submit" value="registrar">
        </form>
        
</body>
</html>