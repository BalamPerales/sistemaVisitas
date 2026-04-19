<?php

    include_once "../conexion/Conexion.php";

    # Creamos la clase principal del CRUD con herencia
    class Crud extends Conexion {

        # Traemos los parametros que enviamos anterioremnte
        public function agregar($nombre, $personaVisitada, $fecha, $horaEntrada){

            # Heredamos la conexión
            $conexion = parent::conectar();

            # Hacemos una inserción en la tabla
            $sql = "INSERT INTO t_visitas (nombre_completo, persona_visitada, fecha, hora_entrada) VALUES ('$nombre', '$personaVisitada', '$fecha', '$horaEntrada')";

            # Guardamos y retornamos la respuesta (Si fue correcta o no)
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function mostrar(){

            # Heredamos la conexión
            $conexion = parent::conectar();

            # Seleccionamos la tabla para que nos devuelva los valores
            $sql = "SELECT * FROM t_visitas";

            # Le pedimos que nos devuelva los valores, para luego ser mostrados
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all(
                $respuesta,
                MYSQLI_ASSOC
            );
        }

        public function eliminar($id){

            # Heredamos la conexión
            $conexion = parent::conectar();

            # Borramos el registro que coincida con el id
            $sql = "DELETE FROM t_visitas WHERE id_visitas = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function actualizar($id, $nuevoNombre, $personaVisitada){
            $conexion = parent::conectar();

            # Actualizar los nuevos registros basados en el id, pero sólo podemos actualizar el nombre del visitante y el lugar o persona de visita
            $sql = "UPDATE t_visitas SET nombre_completo = '$nuevoNombre', persona_visitada = '$personaVisitada' WHERE id_visitas = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function registrarSalida($id, $horaSalida){
            $conexion = parent::conectar();

            # Aquí actualizamos exclusivamente la hora de salida, de igual forma con ayuda del id
            $sql = "UPDATE t_visitas SET hora_salida = '$horaSalida' WHERE id_visitas = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }
    }

?>