<?php
 require '../baseDeDatos/db.php'; 
 /*<input type="submit" value="editar" class="editar" id="editar_t" name="editar">*/
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM ttarea WHERE id = $id";
  $result=mysqli_query($conn2,$sql);
  if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_array($result);
    $tarea=$row['tarea'];
    }
  }
 if(isset($_POST['editar'])){
    $idac=$_GET['id'];
    $tareac=$_POST['tarea'];
    $num=0;
    $sql2="UPDATE ttarea set tarea='$tareac' Where id=$idac";
    mysqli_query($conn2,$sql2);
    header("Location: ../app/list.php?mess=$num");

 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>

    <div class="form-container">
        <div class="formu">
            <form class="form_edit" action="editar_tarea.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <input type="text" name="tarea" id="tarea" class="tarea" value="<?php echo $tarea; ?>" maxlength="200">
                
                <input type="submit" value="editar" class="editar" id="editar_t" name="editar">

                <br>
                <a href="list.php"><button type="button" class="cancel_edt"> cancelar</button></a>

            </form>
        </div>


    </div>

</body>

</html>