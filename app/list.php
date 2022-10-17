<?php
session_start();
require '../baseDeDatos/db.php';
if(isset($_SESSION['email'])){
    $sql= "SELECT id,tarea FROM ttarea WHERE email = '".$_SESSION['email']."'";
    $result =mysqli_query($conn2,$sql);
    $sql2="SELECT CONCAT(nombre,' ',apellidop,' ',apellidom) as nomusu FROM tusuario WHERE email= '".$_SESSION['email']."'";
    $usu=mysqli_query($conn2,$sql2);
    $usuario = mysqli_fetch_array($usu);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        
       <h1>

           <?=
          print $usuario['nomusu']  ?>
          </h1> 
        <table>
            <tr>
                <td>id</td>
                <td>tarea</td>
                <td>accion</td>
            </tr>
            <?php
            while($lista=mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $lista['id'] ?></td>
                    <td><?php echo $lista['tarea'] ?></td>
                    <td>botones</td>
                </tr>
            <?php
            }
            ?>
        </table>
        <a href="cerrarsesion.php">cerrar sesion</a>
    </body>
    </html>
<?php
}else{
    header("Location: ../");
}

?>