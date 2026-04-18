<?php

    require_once "../conexion/Conexion.php";
    require_once "Crud.php";

    date_default_timezone_set('America/Mexico_City');

    $nombre = $_POST['nombre'];
    $personaVisitada = $_POST['personaVisitada'];

    $fecha           = date('Y-m-d');
    $horaEntrada     = date('H:i:s');

    $crud = new Crud();

    $respuesta = $crud->agregar($nombre, $personaVisitada, $fecha, $horaEntrada);

    if ($respuesta) {
        header("location: ../index.php");
        exit();
    } else {
        echo "Error al guardar";
    }

?>