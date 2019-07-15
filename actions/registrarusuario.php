<?php
    //Archivo de conexion a la base de datos.
    require('conexion.php');

    session_start();

    // Obtengo los datos del formulario
    // Recordar que los nombres se obtienen de los campos con attributo "name", no por el "id". 
    $userName = $_REQUEST['user-name'];
    $userEmail = $_REQUEST['user-email'];
    $userPassword = $_REQUEST['userpass'];

    // Encripto el password. 
    $hash = password_hash($userPassword, PASSWORD_BCRYPT);

    //Armo la query, OJO con las comillas.
    $query = 'INSERT INTO users(username, useremail, password)VALUE("' . $userName . '","' . $userEmail . '","' . $hash . '")';
    $resultado = mysqli_query($conexion, $query);

    //Al finalizar, logueo y redirijo a la home.

    if ($resultado) {

        $_SESSION["userName"] = $userName;
        $_SESSION["userEmail"] = $userEmail;
        $_SESSION["userId"] = mysqli_insert_id($conexion);

        header('Location: /home.php');

    } else {

        $_SESSION["mensaje"] = "Usuario ya existente";

        header('Location: /login.php');        
    }
                                                            
?>