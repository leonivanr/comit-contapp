<?php
    //Archivo de conexion a la base de datos.
    require('conexion.php');

    // Obtengo los datos del formulario
    // Recordar que los nombres se obtienen de los campos con attributo "name", no por el "id". 
    $userName = $_REQUEST['user-name'];
    $userNickname = $_REQUEST['user-nickname'];
    $userEmail = $_REQUEST['user-email'];
    $userPassword = $_REQUEST['user-pass'];

    // Encripto el password. 
    $hash = password_hash($userPassword, PASSWORD_BCRYPT);

    //Armo la query, OJO con las comillas.
    $query = 'INSERT INTO users(username, usernickname, useremail, password)VALUE("' . $userName . '","' . $userNickname . '","' . $userEmail . '","' . $hash . '")';
    mysqli_query($conexion, $query);

    //Al finalizar redirijo a la home.
    header('Location: /contapp/index.php')
                                                            
?>