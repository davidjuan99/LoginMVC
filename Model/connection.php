<?php
include 'config.php';

try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
    $conn = new PDO($dsn, USUARIO, PASSWORD);
    echo "<script>alert('Conexión establecida')</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}

?>