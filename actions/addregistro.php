<?php 
    require('conexion.php');

    session_start();

    $registroTipo = $_REQUEST['registro-tipo'];
    $registroMonto = $_REQUEST['registro-monto'];
    $registroCat = $_REQUEST['registro-cat'];
    $registroDescr = $_REQUEST['registro-descr'];
    $registroFecha = $_REQUEST['registro-fecha']; // Fecha de registro, no de creacion
    $registroNota = $_REQUEST['registro-nota'];
    $registroCreadorId = $_SESSION["userId"];

    $query = 'INSERT INTO registros(userId, tipo, monto, descripcion, categoria, fechaCreacionReg, fechaRegistro, nota)VALUES("' . $registroCreadorId . '","' . $registroTipo . '","' . $registroMonto . '","' . $registroDescr . '","' . $registroCat . '",now(), "' . $registroFecha . '","' .$registroNota .'")';
/*    . '", now(), "'*/
    mysqli_query($conexion, $query);

    header('Location: /home.php');
    
?>