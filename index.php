<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="public/datatable/buttons.dataTables.min.css">
    
    <link rel="stylesheet" href="public/fontawesome/css/all.css">

    <title>Visitas</title>
</head>
<body class="bg-light"> 

<div class="container mt-5 mb-5">
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                
                <!-- Aquí va el mensaje de éxito o no -->
                <?php if(isset($_SESSION['mensaje'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['tipo_alerta']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>

                        <!--  Botoncito para quitar el mensaje y que no estorbe -->
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php 
                        // Evitamos que el mensaje se quede cargado al recargar la página
                        unset($_SESSION['mensaje']); 
                        unset($_SESSION['tipo_alerta']);
                    ?>
                <?php endif; ?>

                <!--  Título -->
                <h1 class="fw-light">Administrar Visitas</h1>
                <p class="lead">

                    <!-- Botón de agregar usuario, apuntando al modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
                        Agregar Visita
                    </button>
                    <hr>

                    <!--  Tabla de Usuario/Principal -->
                    <div id="tablaUsuarios"> </div>
                </p>
            </div>
        </div>
    </div>

    <?php

        // Incluimos todos los recursos que utilizamos
        include "modal/modalAgregar.php";
        include "modal/modalActualizar.php"; 
        include "table/tablaUsuarios.php";
        include "views/footer.php";
    ?>
</div>

</body>
</html>