<?php
    session_start();

    require_once "../conexion/Conexion.php";
    include 'Crud.php';

    //  Obtenemos el id
    $id = $_GET['id'];

    $crud = new Crud();

    // Mandamos el id para saber que eliminar
    $respuesta = $crud->eliminar($id);

    
    if ($crud -> eliminar($id)){
        # Mensaje
        $_SESSION['mensaje'] = "Se borró correctamente";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "success"; 

        # Redirección
        header('location:../index.php');
        exit();
    } else {
        # Mensaje
        $_SESSION['mensaje'] = "No se pudo eliminar";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "danger"; 

        # Redirección
        header('Location: ../index.php');
        exit();
    }

?>