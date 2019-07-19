<?php

    session_start();
       

    if (isset($_POST['reset-req-sub'])) {
        
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "contapp.rf.gd/reset-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

        $expira = date("U") + 1800;

        require('conexion.php');

        $userEmail = $_POST['recoverpassemail'];

        $query = "DELETE FROM passreset WHERE passResetEmail=?";

        $stmt = mysqli_stmt_init($conexion);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            die("insert message here");

        } else {
                mysqli_stmt_bind_param($stmt, "s", $userEmail);
                mysqli_stmt_execute($stmt);
        }

        $query = "INSERT INTO passreset (passResetEmail, passResetSelector, passResetToken, passResetExpira) VALUES (?, ?, ?, ?);";

        $stmt = mysqli_stmt_init($conexion);

        if (!mysqli_stmt_prepare($stmt,$query)) {
            die("insert message here" . mysqli_stmt_error($stmt));
        } else {
            $hashToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expira);
            mysqli_stmt_execute($stmt);
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        require('./PHPMailer/PHPMailerAutoload.php');

        $mail = new PHPMailer;
        $mail->isSMTP();

        /*
        * Server Configuration
        */

        $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
        $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
        $mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
        $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
        $mail->Username = "contappinfo@gmail.com"; // Your Gmail address.
        $mail->Password = "L3onl3on"; // Your Gmail login password or App Specific Password.

        /*
        * Message Configuration
        */

        $mail->setFrom('contappinfo@gmail.com', 'Contapp'); // Set the sender of the message.
        $mail->addAddress($userEmail); // Set the recipient of the message.
        $mail->Subject = 'Reestablecer password'; // The subject of the message.

        /*
        * Message Content - Choose simple text or HTML email
        */
        
        // Choose to send either a simple text email...
        $mail->Body = '<p> Link para reestablecer contraseña: <br>
        <a href="' . $url . '">' . $url . '</a></p>'; // Set a plain text body.
        $mail->isHTML(true);
        // ... or send an email with HTML.
        //$mail->msgHTML(file_get_contents('contents.html'));
        // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
        //$mail->AltBody = 'This is a plain-text message body'; 


        if ($mail->send()) {
            session_start();
            $_SESSION['mensaje'] = 'Revisa tu correo para reestablecer tu password.';
            header("Location: ../message.php?type=info");

        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }


/*         $to = $userEmail;

        $asunto = 'Reestablecer contraseña';

        $mensaje = '<p> Link para reestablecer contraseña: <br> ';
        $mensaje .= '<a href="' . $url . '">' . $url . '</a></p>';

        $headers = "From: Contapp <info@contapp.rf.gd>\r\n";
        $headers .= "Reply-To: info@contapp.rf.gd\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $asunto, $mensaje, $headers); */

    } else {
        header("Location ./login.php?error=true");
    }

?>