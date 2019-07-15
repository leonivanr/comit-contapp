<?php 
    session_start();
    require('actions/verificarsesion.php');
    require('actions/conexion.php');

    $query = "SELECT * 
              FROM registros r
              INNER JOIN users u
              ON r.userId = u.userId 
              WHERE r.userId = " . $_SESSION['userId'] . "
              ORDER BY r.fechaRegistro DESC";

    $queryIngresos =   "SELECT SUM(monto) AS sumaing
                        FROM registros r
                        INNER JOIN users u
                        ON r.userId = u.userId 
                        WHERE r.userId = " . $_SESSION['userId'] . " AND r.tipo = 'ingreso'";

    $queryGastos =   "SELECT SUM(monto) AS sumagas
                        FROM registros r
                        INNER JOIN users u
                        ON r.userId = u.userId 
                        WHERE r.userId = " . $_SESSION['userId'] . " AND r.tipo = 'gasto'";

    $registros = mysqli_query($conexion, $query);

    $ingresos = mysqli_query($conexion, $queryIngresos);
    $sumaIngresos = mysqli_fetch_assoc($ingresos);

    $gastos = mysqli_query($conexion, $queryGastos);
    $sumaGastos = mysqli_fetch_assoc($gastos);


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sintony&display=swap" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="styles/bootstrap.min.css" >
  <link rel="stylesheet" href="styles/sidebar.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="icon" href="assets/img/wallet.png">

  <title>Contapp - Resumen</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="bg-light pb-3">

      <nav class="navbar navbar-expand-lg navbar-light bg-success shadow-sm">
        <!-- Boton Sidebar -->
        <div class="block bg-success d-block d-md-none ">
            <div id="menu-toggle" class="cta">
                <div  class="toggle-btn type2"></div>
            </div>
        </div>

        <h3 id="titulo-nav"class="text-white">RESUMEN</h3>

        <div class="block bg-success d-block d-lg-none">

            <div id="menu-plus-toggle" class="cta">
                <div  class="toggle-plus type8"></div>
            </div>

        </div>

             
      </nav>
      <!-- /#nav -->

      <div class="container-fluid">

        <div class="row mt-3">
          <!-- BALANCE -->
          <div id="balance-wrap" class="col-12 col-sm-10 offset-sm-1 col-lg-6 offset-lg-0">
                  <!-- CUADRO DE BALANCES -->
            <div class="card shadow-sm">

              <div class="card-body p-1">
                <!-- CARD BALANCE -->
                <div class="card bg-light mb-1">

                  <div class="card-body text-center py-1">
                    <p class="card-text">Balance</p>
                    <p class="card-text"><h1>$ 
                    <?php 
                       echo $sumaIngresos['sumaing'] - $sumaGastos['sumagas']
                    ?></h1></p>
                  </div>

                </div>
                <!-- CARD INGRESO/ EGRESO -->        
                <div class="card bg-light border-0">

                  <div class="row m-0">
                    <!-- INGRESOS -->

                    <div class="col-6 card">
                        <div class="card-body text-center py-1">
                          <p class="card-text mb-1">Ingresos</p>
                          <h4 class="text-success">$ 
                          <?php     

                          echo $sumaIngresos['sumaing'];

                          ?>
                          </h4>
                        </div>
                    </div>

                    <!-- GASTOS -->

                    <div class="col-6 card">
                        <div class="card-body text-center py-1">
                          <p class="card-text  mb-1">Gastos</p>
                          <h4 class="text-danger">$ 
                          <?php     

                          echo $sumaGastos['sumagas'];

                          ?>
                          </h4>
                        </div>
                    </div>

                  </div>

                </div>

              </div>

            </div>
                  <!-- CUADRO DE REGISTROS -->
            <div class="card shadow-sm mt-3">

              <div class="card-body p-1">
              
                <h3 class="mx-3 my-3">Ultimos registros:

                </h3>
                <!-- EJEMPLOS REGISTROS -->        
                <div id="reg-container">
                <?php
                  while ($fila = mysqli_fetch_array($registros)) { ?>
                
                  <div class="mt-1">

                    <div class="row m-0">

                      <div class="col card">

                        <div class="card-body px-1 py-1">

                          <!-- CREADOR Y FECHA -->
                          <div class="row">

                            <div class="col-12 d-flex justify-content-between text-secondary small">

                              <div>
                                Por <?php echo $fila['userName']; ?>
                              </div>

                              <div class="align-self-end">
                                <?php 
                                  echo date('d/m', strtotime($fila['fechaRegistro'])); 
                                ?>
                              </div>

                            </div>

                          </div>

                          <!-- DESCRIPCION Y MONTO -->
                          <div class="row ">

                            <div class="col-12 d-flex justify-content-between">

                              <h4 class="my-1">
                                <?php echo $fila['descripcion']; ?>
                              </h4>
                              <!-- TODO: Arreglar ROJO o VERDE -->

                              <h4 class="align-self-end my-1">
                                <?php 
                                  if ($fila['tipo'] == 'ingreso' ) {
                                ?>
                                    <span class="text-success">
                                <?php 
                                  } else {
                                ?>   
                                    <span class="text-danger">
                                <?php
                                  }
                                ?>
                                $ <?php echo $fila['monto']; ?>
                                </span>
                              </h4>

                            </div>

                          </div>

                          <!-- CATEGORIA Y NOTAS -->
                          <div class="row">

                            <div class="col-12 d-flex justify-content-start text-secondary small">

                              <div>
                                <i class="fas fa-tag"></i> <?php echo $fila['categoria']; ?>
                              </div>
                              <?php  
                                if (!$fila['nota'] == "") {
                              ?>
                                <div class="ml-1">
                                  <i class="fas fa-info-circle"></i> <?php echo $fila['nota'];?>
                                </div>
                              <?php
                                }
                              ?>
                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>
                <?php 
                  }
                ?>    
                </div>

              </div>

            </div>

          </div>
          
          <!-- AÑADIR REGISTROS -->
          <div id="aniadir-wrap" class="col-12 col-sm-10 offset-sm-1 col-lg-6 offset-lg-0 d-none d-lg-block">
            <div class="card shadow-sm">
              <div class="card-body">
                <h4 class="card-title my-3">Añadir registro</h4>
                                   
                <form action="./actions/addregistro.php" method="POST">

                    <div class="form-inline">
                      <div class="form-group col-12 col-sm-4 p-0">
                          <select id="registro-tipo" name="registro-tipo" class="form-control col-12">
                              <option value="gasto">Gasto</option>
                              <option value="ingreso">Ingreso</option>
                          </select>
                      </div>

                      <div class="form-group col-12 col-sm-8 p-0 pl-sm-1">
                        <input type="number" class="form-control col-12" id="registro-monto" name="registro-monto" placeholder="Monto" required autofocus>
                      </div>

                    </div>

                    <div class="form-inline mt-sm-3">
                        <div class="form-group col-sm-4 p-0">
                            <select id="registro-cat" name="registro-cat" class="form-control col-12" required autofocus>
                                <option value="">Categoría</option>
                                <option value="Comida">Comida</option>
                                <option value="Transporte">Transporte</option>
                                <option value="Servicios">Servicios</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-8 p-0 pl-sm-1">
                          <input type="text" class="form-control col-12" id="registro-descr" name="registro-descr" placeholder="Descripcion..." required autofocus>
                        </div>
                    </div>

                    <div class="form-inline mt-sm-3">

                      <div class="form-group col-sm-5 p-0">
                        <input type="date" class="form-control col-12" id="registro-fecha" name="registro-fecha" value="<?php echo date("Y-m-d");?>" required autofocus>
                      </div>
                      <div class="form-group col-sm-7 p-0 pl-sm-1">
                        <input type="text" class="form-control col-12" id="registro-nota" name="registro-nota" placeholder="Nota...">
                      </div>

                    </div>


                    <!-- Botones Añadir -->
                    <div class="d-flex justify-content-end mt-sm-3">
                    <button type="button" class="btn btn-outline-danger mr-2 d-none d-lg-block">Cancelar</button>
                    <button type="submit" id="registro-anadir"class="btn btn-success">Añadir</button>
                    
                    </div>
                    
                </form>
               
              </div>
            </div>
          </div>
      
        </div>
        <!-- /#containe -->
      </div>
    <!-- /#page-content-wrapper -->

    </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="scripts/jquery-3.4.1.min.js"></script>
  <script src="scripts/bootstrap.bundle.min.js"></script>
  <script src="scripts/app.js"></script>

</body>

</html>
