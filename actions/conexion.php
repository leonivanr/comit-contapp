<?php 

    $hostname = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'contapp';

    $conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

    if (!$conexion) {
        die ("Database connection failed.");
    }
?>