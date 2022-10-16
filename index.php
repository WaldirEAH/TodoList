<?php
session_start();
 require 'baseDeDatos/db.php';
 if(isset($_SESSION['email'])){
    header("Location: app/list.php");
    print $_SESSION['email'];
 }else{
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT nombre, apellidop,apellidom, email, password FROM tusuario  WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $mensaje = '';
    
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
          $_SESSION['email'] = $results['email'];
          header("Location: app/list.php");
        } else {
          $mensaje = 'datos incorrects';
        }
      }
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
            <form action="index.php" method="POST">
                <input type="text" name="email"  placeholder="ingrese su correo" required>
                <input type="password" name="password" placeholder="ingrese su contraseña" required>
                <input type="submit" value="ingresar">
            </form>
            <?php if(!empty($mensaje)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
        
        
        
    </body>
    </html>
<?php
}
?> 
 