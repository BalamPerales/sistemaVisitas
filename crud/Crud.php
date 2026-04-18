<?php

    include_once "../conexion/Conexion.php";

    class Crud extends Conexion {

        public function agregar($nombre, $personaVisitada, $fecha, $horaEntrada){
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_visitas (nombre_completo, persona_visitada, fecha, hora_entrada) VALUES ('$nombre', '$personaVisitada', '$fecha', '$horaEntrada')";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function mostrar(){
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_visitas";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all(
                $respuesta,
                MYSQLI_ASSOC
            );
        }

        public function eliminar($id){
            $conexion = parent::conectar();
            $sql = "DELETE FROM t_visitas WHERE id = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function actualizar($id, $nuevoNombre, $personaVisitada, $horaSalida){
            $conexion = parent::conectar();
            $sql = "UPDATE t_visitas SET nombre_completo = '$nuevoNombre', persona_visitada = '$personaVisitada', hora_salida = '$horaSalida' WHERE id = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function registrarSalida($id, $horaSalida){
            $conexion = parent::conectar();
            $sql = "UPDATE t_visitas SET hora_salida = '$horaSalida' WHERE id_visitas = '$id'";
            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }
    }

?>