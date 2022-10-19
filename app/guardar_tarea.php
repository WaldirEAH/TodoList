<?php
session_start();
require ('../baseDeDatos/db.php');
if(isset($_POST['tarea']))
   $tarea= $_POST['tarea'];
   $email=$_SESSION['email'];

    $sql="INSERT INTO ttarea (tarea,email) VALUES('$tarea','$email')";
    mysqli_query($conn2,$sql);
    header("Location: ../");
 
?>