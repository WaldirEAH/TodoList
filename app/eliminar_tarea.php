<?php
 include '../baseDeDatos/db.php';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql= "DELETE FROM ttarea WHERE id =$id";
    $result=mysqli_query($conn2,$sql);
    if(!$result){
        die("error");
    }
    header("Location: ../index.php");
 }
?>