<?php

    require "conexion/Conexion.php";
    require "crud/Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrar();
?>

<table class="table table-sm table-bordered dt-responsive nowrap" style="width:100%" id="tablaPrincipal">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Persona que visita</th>
            <th>Fecha</th>
            <th>Hora de entrada</th>
            <th>Hora de salida</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        // 2. Validamos que existan datos antes de recorrerlos
        if ($datos) {
            foreach ($datos as $dato) {
                
                // Lógica de Estado y Botón de Salida del profesor
                if (empty($dato['hora_salida'])) {
                    $estado = "🟢 Dentro";
                    // Si no tiene salida, mostramos un botón que viaja a marcarSalida.php
                    $columnaSalida = "<a href='crud/marcarSalida.php?id=" . $dato['id_visitas'] . "' class='btn btn-success btn-sm'>Marcar Salida</a>";
                } else {
                    $estado = "🔴 Fuera";
                    // Si ya tiene salida, mostramos la hora normal
                    $columnaSalida = $dato['hora_salida'];
                }
                ?>
                
                <tr>
                    <td><?php echo $dato['id_visitas']; ?></td>
                    <td><?php echo $dato['nombre_completo']; ?></td>
                    <td><?php echo $dato['persona_visitada']; ?></td>
                    <td><?php echo $dato['fecha']; ?></td>
                    <td><?php echo $dato['hora_entrada']; ?></td>
                    <td><?php echo $horaSalida; ?></td>
                    
                    <td class="text-center">
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizar">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                    
                    <td class="text-center">
                        <a href="crud/delete.php?id=<?php echo $dato['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                
                <?php
            }
        }
        ?>
    </tbody>
</table>