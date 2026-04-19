<?php
    session_start();

    require_once "../conexion/Conexion.php";
    require_once "Crud.php";

    $id = $_POST['id_visitas'];
    $nombre = $_POST['nombre'];
    $personaVisitada = $_POST['personaVisitada'];

    # Objeto
    $crud = new Crud();

    # Llamada al método
    $respuesta = $crud->actualizar($id, $nombre, $personaVisitada);

    if ($respuesta) {

        # Mensaje
        $_SESSION['mensaje'] = "Actualizado con exito";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "success";

        # Redirección
        header("Location: ../index.php");
        exit();

    } else {

        # Mensaje
        $_SESSION['mensaje'] = "Error al actualizar";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "danger"; 

        # Redirección
        header('Location: ../index.php');
        exit();
    }

?>