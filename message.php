<?php session_start() ?>
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
        <div class="d-flex  justify-content-center mb-4">
            <img id="login-img" src="assets/img/wallet-center.png" alt="" class="rounded-circle shadow-sm">
        </div>
        <br>
        <hr class="">
        <div class="alert alert-<?php echo $_GET['type']; ?>">

            <?php echo $_SESSION['mensaje'];

            unset($_SESSION['mensaje']);
            header('Refresh: 7; URL=http://www.contapp.rf.gd/login.php');
            ?>

        </div>
        <br>

        <p>Redirigiendo automanticamente...</p>

        <br>


    </div>


    <!-- Librerias JS -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/app.js"></script>

</body>

</html>