
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

    <div id="logreg-forms" class="mt-5 col col-sm-6 col-md-4 col-lg-3 shadow rounded">
        <div class="d-flex  justify-content-center mb-5">
            <img id="login-img" src="assets/img/wallet-center.png" alt="" class="rounded-circle shadow-sm">
        </div>
        
        <?php 
                $selector = $_GET['selector'];
                $validator = $_GET['validator'];

                if (empty($selector) || empty($validator)) {
                    echo '<div class="alert alert-danger" role="alert">
                            No se pudo validar el pedido.
                         </div>';
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                       
        ?>

            <form action="./actions/updatenewpass.php" method="POST" class="" 
                oninput='resetpassformrepeat.setCustomValidity(resetpassformrepeat.value != resetpassform.value ? "Contraseñas no coinciden." : "")'>
                    <hr class="">

                    <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                    <!-- PWD -->
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" id="resetpassform" name="resetpassform" class="form-control" placeholder="Nueva contraseña" required autofocus>

                    </div>
                    <!-- Confirmar PWD -->
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-redo-alt"></i></span>
                        </div>
                        <input type="password" id="resetpassformrepeat" name="resetpassformrepeat" class="form-control" placeholder="Repetir Contraseña" required autofocus >
                    </div>

                    <button id="register-btn" class="btn btn-primary btn-block shadow-sm" type="submit" name="reset-psw-submit">
                        Reestablecer</button>

            </form>

        <?php
                        
                    }
                }
                
        ?>

        <br>


    </div>


    <!-- Librerias JS -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/app.js"></script>

</body>

</html>