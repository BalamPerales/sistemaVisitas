<?php
    # Iniciamos la sesión
    session_start(); 

    require_once "../conexion/Conexion.php";
    require_once "Crud.php";

    # Utilizamos esté método para asignar el uso horario a ocupar, ya que si no lo hacemos pondrá lo hora central que no coincide con nosotros.
    date_default_timezone_set('America/Mexico_City');

    # Guardamos todos los valores que nos llegó por método post.
    $nombre = $_POST['nombre'];
    $personaVisitada = $_POST['personaVisitada'];

    # En esté caso nos encargamos de recibirlos con formato formato para así evitar los errores. 
    $fecha = date('Y-m-d');
    $horaEntrada = date('H:i:s');

    # Creamos el objeto
    $crud = new Crud();

    # Mandamos los parametros obtenidos, aprovechamos para guardar la respuesta en una variable para así lograr que nos salga un resultado
    $respuesta = $crud->agregar($nombre, $personaVisitada, $fecha, $horaEntrada);

    # Verificamos que se haya guardado exitosamente nuestros datos ingresados
    if ($respuesta) {

        # Mensaje
        $_SESSION['mensaje'] = "Visita registrada";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "success";
        
        #Redirección
        header("location: ../index.php");
        exit();

    } else {

        # Mensaje
        $_SESSION['mensaje'] = "Error al guardar";

        # Color de la alerta
        $_SESSION['tipo_alerta'] = "danger"; 

        # Redirección
        header("location: ../index.php");
        exit();
    }

?>