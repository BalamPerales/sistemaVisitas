<?php

    require_once "../conexion/Conexion.php";
    require_once "Crud.php";

    date_default_timezone_set('America/Mexico_City');

    $id = $_GET['id'];
    $horaSalidaActual = date('H:i:s');

    $crud = new Crud();
    $respuesta = $crud->registrarSalida($id, $horaSalidaActual);

    if ($respuesta) {
        header("location:../index.php");
        exit();
    } else {
        echo "Error al registrar la salida";
    }

?>