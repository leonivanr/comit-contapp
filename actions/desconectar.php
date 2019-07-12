<?php
    session_start();
    session_unset();
    session_destroy();
    //TODO: Cambiar a la hora se subir.
    header('Location: /login.php');
?>