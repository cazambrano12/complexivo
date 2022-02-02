<?php
//Modelo de conexión para gestión de especialidades
    class especialidad{
        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }
        
        public function get_especialidad(){

            $sentencia = $this->bd -> query("SELECT * FROM especialidad");
            $especialidad = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $especialidad;
        }

        public function get_nombre_especialidad(){  

            $sentencia_especialidad = $this->bd->query("SELECT nombre_especialidad FROM especialidad;");
            $especalidad = $sentencia_especialidad -> fetchAll(PDO::FETCH_ASSOC);
            return $especalidad;
       }

        public function set_especialidad(){

            if(empty($_POST["oculto"]) 
                || empty($_POST["txtEspecialidad"])
                || empty($_POST["txtDescripcion"])
                || empty($_POST["radioOpcion"])){

                header('Location: mensajes_admin.php?mensaje=falta');
                exit();
            }
            
            $especialidad = $_POST["txtEspecialidad"];
            $descripcion = $_POST["txtDescripcion"];
            $disponible = $_POST["radioOpcion"];

            $sentencia = $this->bd->prepare("INSERT INTO 
            especialidad (nombre_especialidad,descripcion_esp,disponibilidad)
            VALUES (?,?,?);");
            
            $resultado = $sentencia->execute([$especialidad,$descripcion,$disponible]);

            if ($resultado === TRUE) {
                header('Location: mensajes_admin.php?mensaje=registrado');
                exit();
            } else {
                header('Location: mensajes_admin.php?mensaje=error');
                exit();
            }
        }

        public function get_editar_especialidad(){

            if(!isset($_GET['id_especialidad'])){
                header('Location: mensajes_admin.php?mensaje=error');
                exit();

            }
            $id_esp = $_GET['id_especialidad'];
            $sentencia = $this->bd->prepare("SELECT * FROM especialidad WHERE id_especialidad = ?;");
            $sentencia->execute([$id_esp]);
            $especialidad = $sentencia->fetch(PDO::FETCH_OBJ);
            return $especialidad;
        }

        public function set_editar_especialidad(){

            if(!isset($_POST['id_especialidad'])){
                header('Location: mensajes_admin.php?mensaje=error');
            }

            $id_esp = $_POST['txtid_esp'];
            $especialidad = $_POST['txtEspecialidad'];
            $descripcion = $_POST['txtDescripcion'];
            $disponible = $_POST['radioOpcion'];
        
            $sentencia = $this->bd->prepare("UPDATE especialidad SET nombre_especialidad = ?, descripcion_esp = ?, disponibilidad = ? WHERE id_especialidad = ?;");

            $resultado = $sentencia->execute([$especialidad,$descripcion,$disponible,$id_esp]);

            if($resultado === TRUE){
                header('Location: mensajes_admin.php?mensaje=editado');
            }else{
                header('Location: mensajes_admin.php?mensaje=error');
                exit();
            }
        }

        public function get_medicos_especialidad_editar(){  

            $ci = $_GET['ci'];
            $sentencia = $this->bd->prepare("SELECT persona.ci, CONCAT (persona.nombre,' ',persona.apellido) AS medico FROM persona WHERE persona.ci=?;");
            $sentencia->execute([$ci]);
            $medico_especialidad_editar = $sentencia->fetch(PDO::FETCH_OBJ);
            return $medico_especialidad_editar;
        }

        public function set_medico_especialidad(){

            #guarda los valores en el vector material
            $i=0;
            //$materiales="";
            foreach ($_POST['txtEspecialidad'] as $dato){
                $array[$i]=$dato;
                $i++;
                $especialidad = implode(",", $array);
             }

            $ci_medico = $_POST['txtCedula'];
            $medico = $_POST['txtMedico'];
            $turno_inicio = $_POST['txtTurno_inicio'];
            $turno_fin = $_POST['txtTurno_fin'];
            $hora_inicio = $_POST['txtHora_inicio'];
            $hora_fin = $_POST['txtHora_fin'];
            $disponibilidad = $_POST['radioOpcion'];

            $sentencia = $this->bd->prepare("UPDATE medico_especialidad 
                                                SET 
                                                medico= ?, 
                                                especialidad= ?,
                                                turno_inicio= ?,
                                                turno_fin= ?,
                                                hora_inicio= ?,
                                                hora_fin= ?,
                                                disponibilidad= ?
                                                WHERE ci_mesp = ?;");
        
            $resultado = $sentencia->execute([$medico,$especialidad,$turno_inicio,$turno_fin,$hora_inicio,$hora_fin,$disponibilidad,$ci_medico]);

            if($resultado === TRUE){
                header('Location: mensajes_admin.php?mensaje=registrado');
            }else{
                header('Location: mensajes_admin.php?mensaje=error');
            exit();
            }
        }

    }
?>