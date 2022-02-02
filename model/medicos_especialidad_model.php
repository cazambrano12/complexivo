<?php
//Modelo de conexión para gestión de médicos-especialidades
    class medicos_especialidad{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_medicos_especialidad(){

            $sentencia_especialidad = $this->bd->query("SELECT * FROM medico_especialidad;");
            $turno_medico = $sentencia_especialidad -> fetchAll(PDO::FETCH_OBJ);
            //print_r($turno_medico);
            return $turno_medico;
            
        }

        


    }
?>