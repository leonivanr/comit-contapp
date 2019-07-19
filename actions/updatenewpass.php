<?php

if (isset($_POST['reset-psw-submit'])) {
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['resetpassformrepeat'];

    $today = date('U');

    require('conexion.php');

    $query = "SELECT * FROM passreset WHERE passResetSelector=? AND passResetExpira >=?";

    $stmt = mysqli_stmt_init($conexion);

    if (!mysqli_stmt_prepare($stmt,$query)) {
        die("Error: " . mysqli_stmt_error($stmt));
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $today); 
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (!$row = mysqli_fetch_assoc($result)) {
            echo "Necesitas reenviar tu pedido de reestablecer contraseña.";
            exit();
            
        } else {

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row['passResetToken']);

            if ($tokenCheck === false) {
                echo "Necesitas reenviar tu pedido de reestablecer contraseña.";
            } elseif ($tokenCheck === true) {

                $tokenEmail = $row['passResetEmail'];
                
                $query = 'SELECT * FROM users WHERE userEmail=?;';
                $stmt = mysqli_stmt_init($conexion);

                if (!mysqli_stmt_prepare($stmt,$query)) {
                    echo "Pasaron cosas 2" . mysqli_stmt_error($stmt);
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail); 
                    mysqli_stmt_execute($stmt); 
                    
                    $result = mysqli_stmt_get_result($stmt);

                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "Necesitas reenviar tu pedido de reestablecer contraseña.";
                        exit();
                    }
                    else {
                        $query = 'UPDATE users SET Password=? WHERE userEmail=?;';
                        $stmt = mysqli_stmt_init($conexion);

                        if (!mysqli_stmt_prepare($stmt,$query)) {
                            echo "ERROR." . mysqli_stmt_error($stmt);
                            exit();
                        } else {
                            $hashpw = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $hashpw, $tokenEmail); 
                            mysqli_stmt_execute($stmt); 

                            $query = 'DELETE FROM passreset WHERE passResetEmail=?';
                            $stmt = mysqli_stmt_init($conexion);

                            if (!mysqli_stmt_prepare($stmt,$query)) {
                                echo "ERROR.";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s",$tokenEmail); 
                                mysqli_stmt_execute($stmt); 
                                session_start();
                                $_SESSION['mensaje'] = 'Contraseña actualizada correctamente.';

                                header("Location: ../message.php?type=success");

                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location ../login.php");
}
    
?>