<?php
 include '../baseDeDatos/db.php';
 if(isset($_GET['id'])){
    $mess="eliminacion correcta";
    $id=$_GET['id'];
    $sql= "DELETE FROM ttarea WHERE id =$id";
    $result=mysqli_query($conn2,$sql);
    if(!$result){
       $mess= "error";
    }
    header("Location: ../app/list.php?mess=$mess");
 }
 
?>