<?php

    class catalogo{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_genero(){  
            $sentencia = $this->bd->query("SELECT genero FROM catalogo WHERE genero IS NOT NULL;");
            $genero = $sentencia -> fetch(PDO::FETCH_OBJ);
            return $genero;
        }

        public function get_rol(){  
            $sentencia = $this->bd->query("SELECT rol FROM catalogo WHERE rol IS NOT NULL;");
            $rol = $sentencia -> fetch(PDO::FETCH_OBJ);
            return $rol;
        }

    }

?>