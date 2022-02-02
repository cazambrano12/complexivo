<?php
//Modelo de conexión para gestión de exámenes
    class examenes{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_editar_examen(){ 
            $id_ex = $_GET['id_examen'];
            $sentencia = $this->bd->query("SELECT * FROM examenes WHERE id_examen = '$id_ex';");
            $examen = $sentencia->fetch(PDO::FETCH_OBJ);
            return $examen;
        }

        public function get_busqueda(){

            if(isset($_GET['enviar'])){
                $examen=$_GET['consulta'];

                //print_r($medicina);

                $consulta = $this->bd->query("SELECT * FROM examenes WHERE examen LIKE '%$examen%';");
                $busca_examen = $consulta -> fetchAll(PDO::FETCH_OBJ);
                //print_r($busca_medicinas);
                return $busca_examen;
            }

        }

        public function get_nombre_examen(){  
            
                if(isset($_GET['enviar'])){
                    $examen=$_GET['consulta'];
                    $consulta = $this->bd->query("SELECT * FROM examenes WHERE examen LIKE '%$examen%';");
                    $medicina_examen = $consulta -> fetchAll(PDO::FETCH_OBJ);
                    //print_r($busca_medicinas);
                    return $medicina_examen;
                    
    
                }else{
                    $sentencia_especialidad = $this->bd->query("SELECT examen,estado_examen FROM examenes;");
                    $medicina_examen = $sentencia_especialidad -> fetchAll(PDO::FETCH_OBJ);
                    //print_r($medicina_cita);
                    return $medicina_examen;

                }
        }

        public function set_editar_examen(){

            $id_examen = $_POST['txtIDex'];
            $examen = $_POST['txtExamen'];
            $estado = $_POST['txtEstado'];

            $sentencia = $this->bd->prepare("UPDATE examenes 
                                SET
                                examen = ?, 
                                estado_examen = ?
                                WHERE 
                                id_examen = ?;");
            $resultado = $sentencia->execute([$examen,$estado,$id_examen]);
         

            if($resultado === TRUE){
                print "<script>alert('La examen se actualizó exitósamente.'); window.location= 'http://localhost/app/view/examenes_admin_view.php?consulta=&enviar='</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }
        }

        public function set_examenes(){
          
            $examen = $_POST["txtExamen"];
            $estado = $_POST["radioOpcion"];

            $sentencia = $this->bd->prepare("INSERT INTO 
            examenes (examen,estado_examen)
            VALUES (?,?);");
            
            $resultado = $sentencia->execute([$examen,$estado]);

            if($resultado === TRUE){
                print "<script>alert('El examen se ha registrado exitósamente.'); window.location= 'http://localhost/app/view/examenes_admin_view.php?consulta=&enviar='</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }
        }
    }
?>