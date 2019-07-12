<?php 
    require('conexion.php');
    //Mantengo la sesión iniciada.
    session_start();

    $useremail = $_REQUEST['login-email'];
    $userpass = $_REQUEST['login-pass'];

    $query = 'SELECT * FROM users WHERE userEmail LIKE "' . $useremail . '" LIMIT 1';
   
    $respuesta = mysqli_query($conexion, $query);

    $registro = mysqli_fetch_array($respuesta);
    // Verifico coincidencia.
    $verify = password_verify($userpass,$registro['Password']);

    
    if ($verify) {
        //Igualo session y login.
        $_SESSION["userEmail"] = $useremail;
        $_SESSION["userId"] = $registro['userId'];
        $_SESSION["userName"] = $registro['userName'];

        header('Location: /home.php');
    }
    else {

        $_SESSION["mensaje"] = 'Datos incorrectos.';
        header('Location: /login.php');
    }

?>