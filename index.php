<?php
    session_start();

    if(isset($_SESSION["userEmail"])){
        header('Location: /home.php'); 
    } else {
        header('Location: /login.php'); 
    }
?>  