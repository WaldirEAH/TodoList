<?php
session_start();
require '../baseDeDatos/db.php';
if (isset($_SESSION['email'])) {
    $sql = "SELECT id,tarea FROM ttarea WHERE email = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn2, $sql);
    $sql2 = "SELECT CONCAT(nombre,' ',apellidop,' ',apellidom) as nomusu FROM tusuario WHERE email= '" . $_SESSION['email'] . "'";
    $usu = mysqli_query($conn2, $sql2);
    $usuario = mysqli_fetch_array($usu);
    $nombre = $usuario['nomusu'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>

    <body>
        <div class="contenedor">
            <h1 class="nombre"><?php print $nombre;?></h1>

            <table>

                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Tarea</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <?php
                while ($lista = mysqli_fetch_array($result)) {
                ?>
                    <tr class="tconte">
                        <td><?php echo $lista['id'] ?></td>
                        <td><?php echo $lista['tarea'] ?></td>
                        <td>
                            <div class="butones">

                                <form action=""class="btn">
                                    <button type="button"class="btn_editar">editar</button>
                                </form>
                                <form action=""class="btn">
                                    <button type="button"class="btn_eliminar">eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <a href="cerrarsesion.php">cerrar sesion</a>
    </body>

    </html>
<?php
} else {
    header("Location: ../");
}

?>