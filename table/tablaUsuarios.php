<?php

    // Generamos el required de la conexión y del CRUD ya que los vamos a usar
    require "conexion/Conexion.php";
    require "crud/Crud.php";

    // Creamos la estancia
    $crud = new Crud();

    // Ejecutamos el método mostrara a través del objeto
    $datos = $crud->mostrar();
?>

<!-- Creamos la tabla -->
<table class="table table-sm table-bordered dt-responsive nowrap" style="width:100%" id="tablaPrincipal">
    
    <!-- Estás serán nuestras cabeceras de la tabla -->
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Persona que visita</th>
            <th>Fecha</th>
            <th>Hora de entrada</th>
            <th>Hora de salida</th>
            <th>Estado</th> 
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    

    <tbody>
        <?php
        if ($datos) {

        // Para poder ordenar, usar y mostrar los datos
            foreach ($datos as $dato) {
                
                # Revisamos sí está vacía la salida (null) para poder colocar el botón de marcar salida
                if (empty($dato['hora_salida'])) {
                    $estado = "Dentro";
                    $columnaSalida = "<a href='crud/salida.php?id=" . $dato['id_visitas'] . "' class='btn btn-dark btn-sm'>Marcar salida</a>";
                } else {
                    $estado = "Fuera";
                    $columnaSalida = $dato['hora_salida'];
                }
                ?>
                
                <!-- Traemos los datos y comenzamos a mostrarlos -->
                <tr>
                    <td><?php echo $dato['id_visitas']; ?></td>
                    <td><?php echo $dato['nombre_completo']; ?></td>
                    <td><?php echo $dato['persona_visitada']; ?></td>
                    <td><?php echo $dato['fecha']; ?></td>
                    <td><?php echo $dato['hora_entrada']; ?></td>
                    
                    <!--  Mostramos el estado -->
                    <td class="text-center"><?php echo $columnaSalida; ?></td>
                    <td class="text-center font-weight-bold"><?php echo $estado; ?></td>
                    
                    <!--  Botón de editar, mandando los datos con los que se van a trabajar, o en este caso a actualizar -->
                    <td class="text-center">
                        <button class="btn btn-warning btnEditar" 
                                data-toggle="modal" 
                                data-target="#modalActualizar"
                                data-id="<?php echo $dato['id_visitas']; ?>"
                                data-nombre="<?php echo $dato['nombre_completo']; ?>"
                                data-visitado="<?php echo $dato['persona_visitada']; ?>">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </td>
                    
                    <!-- Botón de eliminar, aprovechamos para poner el mensaje de segurida; Así nos ahorramos un poco de JS al no poner alert  -->
                    <td class="text-center">
                        <a href="crud/delete.php?id=<?php echo $dato['id_visitas']; ?>" 
                           class="btn btn-danger" 
                           onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                </tr>
                
                <?php
            }
        }
        ?>
    </tbody>
</table>