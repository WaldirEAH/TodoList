<?php
$server = 'localhost';
$user='root';
$pass='';
$bdatos='todolist';

try {
    $conn=new PDO("mysql:host=$server;dbname=$bdatos;",$user,$pass);
} catch (PDOException $e) {
    die('fallo de coneccion: '.$e->getMessage());
}

?>