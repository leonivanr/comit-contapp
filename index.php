<?php
    session_start();

    if(isset($_SESSION["username"])){
        
        header('Location: /contapp/home.php'); 
    } else {
        header('Location: /contapp/login.php'); 
    }
?>  