<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Sintony&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Resumen</title>
</head>

<body>
    <!-- //////////////////////////////////
    /////////// CONTENIDO //////////////////
    ////////////////////////////////////-->
    <div id="tab-wrap" class="container p-0">
        <!-- //////////////////////////////////
        /////////// INICIO //////////////////
        ////////////////////////////////////-->
        <div id="tab-resumen" class="active">


            <form >
            <select name="cars" class="custom-select w-50">
                <option value="volvo">Egreso</option>
                <option value="fiat">Ingreso</option>
                <option value="audi">Transferir</option>
            </select>
            <div class="form-group w-50">
                <input type="text" class="form-control" id="add-monto" placeholder="Monto">
                <input type="text" class="form-control" id="add-descripcion" placeholder="Descripcion">
            </div>
            <button type="button" id="agregar-btn" class="btn">Añadir</button>
            </form> 

            <!-- BOTON AÑADIR -->
            <a id="add-btn" href="#" class="float">
                <i class="fa fa-plus my-float"></i>
            </a>



        </div>
        <!-- prueba añadir -->
        <div id="tab-aniadir" class="bg-primary">
        <form>
            <select name="cars" class="custom-select w-50">
                <option value="volvo">Egreso</option>
                <option value="fiat">Ingreso</option>
                <option value="audi">Transferir</option>
            </select>
            <div class="form-group w-50">
                <input type="text" class="form-control" id="usr" placeholder="Monto">
                <input type="text" class="form-control" id="usr" placeholder="Descripcion">
            </div>
            <button type="button" class="btn">Añadir</button>
            </form> 
        </div>


    <!-- Librerias JS -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>