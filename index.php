<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="public/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="public/datatable/buttons.dataTables.min.css">
    
    <title>Visitas</title>
</head>
<body class="bg-light"> <div class="container mt-5 mb-5">

    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
        <h1 class="fw-light">Administrar Usuarios</h1>
        <p class="lead">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">
                Agregar Usuario
            </button>
            <hr>
            <div id="tablaUsuarios"> </div>
        </p>
        </div>
    </div>
    
    <?php 
        include "modal/modalAgregar.php";
        include "modal/modalActualizar.php";
        include "table/tablaUsuarios.php";
        include "views/footer.php" ;
    ?>
</body>

    <!-- ctrl + shift + 7 -->

</html>