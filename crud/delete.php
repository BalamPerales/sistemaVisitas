<?php

    include 'Crud.php';

    $id = $_GET['id_nombre'];

    $crud = new Crud();

    if ($crud -> eliminar($id)){
        header('location:../index.php');
    } else {
        echo "No se pudo eliminar";
    }

?>