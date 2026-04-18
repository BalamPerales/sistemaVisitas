<?php

    class Conexion {
        public function conectar(){
            return mysqli_connect(
                "localhost",
                "dba_visitas",
                "visita123",
                "bd_visitas"
            );
        }
    }

?>