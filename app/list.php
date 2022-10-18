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
            <h1 class="nombre"><?php print $nombre; ?></h1>

            <table>

                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Tarea</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <?php
                $cont = 0;
                while ($lista = mysqli_fetch_array($result)) {
                    $cont++;
                ?>
                    <tr class="tconte">
                        <td><?php echo $cont ?></td>
                        <td><?php echo $lista['tarea'] ?></td>
                        <td>
                            <div class="butones">

                                <form action="" class="btn">
                                    <a href="editar_tarea.php?id=<?php echo $lista['id'] ?>"><button type="button" class="btn_editar">editar</button></a>

                                </form>
                                <form action="" class="btn">
                                    <a href="eliminar_tarea.php?id=<?php echo $lista['id'] ?>"><button type="button" class="btn_eliminar">eliminar</button></a>
                                </form>
                            </div>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="nuevo">

            <form action="" class="btn_fnuevo">
                <button type="button" class="btn_nuevo">Nueva tarea</button>
            </form>
            <a href="cerrarsesion.php">cerrar sesion</a>
            <?php switch ($_GET['mess']) {
                case 0:
                    echo "edicion correcta";
                    break;
                case 1:
                    echo "eliminacion correcta";
                    break;
                case 2:
                    echo "i es igual a 2";
                    break;
            } ?>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: ../");
}

?>