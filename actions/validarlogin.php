<?php 
    require('conexion.php');

    $username = $_REQUEST['login-name'];
    $userpass = $_REQUEST['login-pass'];

    $query = 'SELECT * FROM users WHERE useremail LIKE "' . $username . '"';

    echo $query;

    $respuesta = mysqli_query($conexion, $query);

    $registro = mysqli_fetch_array($respuesta);

    $verify = password_verify($userpass,$registro['Password']);

    
    if ($verify) {
        header('Location: /contapp/home.php');
    }
    else {
        header('Location: /contapp/login.php');
    }

?>