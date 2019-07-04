<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Sintony&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>

<body>

    <div id="logreg-forms" class="col col-sm-5 col-md-5">

        <form action="./actions/validarlogin.php" method="POST" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Conectarse </h1>
            <hr>
            <!-- =============  SOCIAL LOGIN  ================-->
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Google+</span> </button>
            </div>
            <hr>
            <!-- =============  EMAIL LOGIN  ================-->

            <input type="email" id="inputEmail" name="login-name" class="form-control" placeholder="User" required="" autofocus="">
            <input type="password" id="inputPassword" name="login-pass" class="form-control" placeholder="Contraseña" required="">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            <a href="#" id="forgot_pswd">Resetear Password</a>
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
            <hr>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Google+</span> </button>
            </div>

            <hr>

            <input type="text" id="user-name" name="user-name" class="form-control" placeholder="Nombre" required="" autofocus="">
            <input type="text" id="user-nickname" name="user-nickname" class="form-control" placeholder="Nombre de usuario" required=""
                autofocus="">
            <input type="email" id="user-email" name="user-email" class="form-control" placeholder="Email" required autofocus="">
            <input type="password" id="user-pass" name="user-pass" class="form-control" placeholder="Contraseña" required autofocus="">
            <input type="password" id="user-repeatpass" name="user-repeatpass" class="form-control" placeholder="Repetir Contraseña" required
                autofocus="">

            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i>
                Registrarse</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Atrás</a>
        </form>
        <br>

    </div>

    <!-- Librerias JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="scripts/app.js"></script>
</body>

</html>