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
            <!-- TITULO -->
            <div class="row bg-success container m-0 pt-2">
                <div class="col-12">
                    <h3 class="text-center">Balance</h3>
                </div>
            </div>

            <div class="card m-1">

                <div class="row no-gutters">

                    <div class="col-4">
                        <div class="card border-success">
                            <div class="card-body text-center p-2">Ingreso <br>
                                25
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">Balance</div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card border-danger">
                            <div class="card-body">Egreso</div>
                        </div>
                    </div>

                </div>

            </div>

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
            <!-- DETALLES -->
            <div class="detalles-wrap">
            	<div class="card">
            	    <div class="card-body d-flex justify-content-between">
            	       <span>
            	            Comida
            	       </span>
            	       <span class="align-self-end">
            	            $35
            	       </span>
            	    </div>
            	</div>
            </div>
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

        <!-- //////////////////////////////////
        //////////  ESTADO     ///////////////
        ////////////////////////////////////-->

        <div id="tab-estado">
            <div class="row bg-success container m-0 pt-2">
                <div class="col-12">
                    <h3 class="text-center">Balance</h3>
                </div>
            </div>
            <div id="balance-wrap">


                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item col-6 ">
                        <a class="nav-link  text-center text-success font-weight-bold show active" data-toggle="tab"
                            href="#ingresos">Ingresos</a>
                    </li>
                    <li class="nav-item col-6 ">
                        <a class="nav-link text-center text-success font-weight-bold" data-toggle="tab"
                            href="#egresos">Egresos</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="ingresos" class="container tab-pane active "><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</p>
                    </div>
                    <div id="egresos" class="container tab-pane fade"><br>
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////////
        //////////  CUENTAS     ///////////////
        ////////////////////////////////////-->
        <div id="tab-cuentas">
            <h1>CUENTAS</h1>

        </div>
        <!-- //////////////////////////////////
        //////////  PERFIL     ///////////////
        ////////////////////////////////////-->
        <div id="tab-ajustes">
            <h1>AJUSTES</h1>
        </div>
    </div>

    <!-- //////////////////////////////////
    //////////  NAV-BAR     ///////////////
    ////////////////////////////////////-->
    <div id="nav-bar">
        <ul>
            <li id="nav-resumen"><a href="#tab-resumen" class="active"><i class="fas fa-tasks"></i></a></li>
            <li id="nav-estado"><a href="#tab-estado"><i class="fas fa-chart-bar"></i></a></li>
            <li id="nav-cuentas"><a href="#tab-cuentas"><i class="fas fa-wallet"></i></a></li>
            <li id="nav-ajustes"><a href="#tab-ajustes"><i class="fas fa-wrench"></i></a></li>
        </ul>
    </div>


    <!-- Librerias JS -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>