<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Sintony&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="assets/img/wallet.png">
    <title>Contapp</title>
</head>

<body class="bg-success">

    <div id="logreg-forms" class="col-12 col-sm-6 col-md-6 mt-5 shadow rounded">

        <form action="./actions/validarlogin.php" method="POST" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Conectarse </h1>
            <hr>
            <!-- =============  SOCIAL LOGIN  ================-->
            <!--<div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Google+</span> </button>
                </div>
            <hr> -->
            <!-- =============  EMAIL LOGIN  ================-->
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input type="email" id="inputEmail" name="login-email" class="form-control m-0" placeholder="Email" required="">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" id="inputPassword" name="login-pass" class="form-control" placeholder="Contraseña" required="">
            </div>
            <?php
                if (isset($_SESSION['mensaje'])) {
                   echo '<div class="alert alert-danger mt-3">'
                            . $_SESSION['mensaje'] .
                        '</div>';
                }
            ?>
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            <!--<a href="#" id="forgot_pswd">Resetear Password</a>-->
            <hr>

            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
                Registrarse</button>
        </form>

        <form action="/reset/password/" class="form-reset">
            <input type="email" id="resetEmail" class="form-control" placeholder="Email" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Resetear</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Atrás</a>
        </form>

        <!-- =============  REGISTRO ================-->
        <!--  -->

        <form action="./actions/registrarusuario.php" method="POST" class="form-signup">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Registrarse </h1>
            <!--
            <hr>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Google+</span> </button>
            </div>
            -->
            <hr>

            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>    
                <input type="text" id="user-name" name="user-name" class="form-control" placeholder="Nombre" required="" autofocus="">
            </div>

            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input type="email" id="user-email" name="user-email" class="form-control" placeholder="Email" required autofocus="">
            </div>

            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" id="user-pass" name="user-pass" class="form-control" placeholder="Contraseña" required autofocus="">
            </div>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-redo-alt"></i></span>
                </div>
                <input type="password" id="user-repeatpass" name="user-repeatpass" class="form-control" placeholder="Repetir Contraseña" required
                autofocus="">
            </div>
            <button id="register-btn" class="btn btn-primary btn-block disabled" type="submit"><i class="fas fa-user-plus"></i>
                Registrarse</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Atrás</a>
        </form>
        <br>

    </div>

    <!-- Librerias JS -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>