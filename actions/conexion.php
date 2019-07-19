<?php 

    $hostname = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'contapp';

    $conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

    if (!$conexion) {
        die ("Connection failed: " . mysqli_connect_error());
    }
?>