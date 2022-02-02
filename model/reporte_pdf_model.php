<?php
//Modelo de conexión para gestión de reporte PDF
    class reporte{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_reporte_cita(){

            $id_cita = $_GET['id_cita'];


            $consulta = $this->bd->query("SELECT * FROM cita WHERE id_cita='$id_cita';");
            $reporte_pdf = $consulta -> fetchAll(PDO::FETCH_ASSOC);
            return $reporte_pdf;

            
        }
    }
?>