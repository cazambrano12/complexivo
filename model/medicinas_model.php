<?php
//Modelo de conexión para gestión de medicinas
    class medicinas{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_editar_medicina(){ 
            $id_med = $_GET['id_medicina'];
            $sentencia = $this->bd->query("SELECT * FROM medicamentos WHERE id_medicina = '$id_med';");
            $medicina = $sentencia->fetch(PDO::FETCH_OBJ);
            return $medicina;
        }

        public function get_busqueda(){

            if(isset($_GET['enviar'])){
                $medicina=$_GET['consulta'];

                //print_r($medicina);

                $consulta = $this->bd->query("SELECT * FROM medicamentos WHERE medicina LIKE '%$medicina%';");
                $busca_medicinas = $consulta -> fetchAll(PDO::FETCH_OBJ);
                //print_r($busca_medicinas);
                return $busca_medicinas;
            }

        }

        public function get_nombre_medicina(){  
            
                if(isset($_GET['enviar'])){
                    $medicina=$_GET['consulta'];
                    $consulta = $this->bd->query("SELECT * FROM medicamentos WHERE medicina LIKE '%$medicina%';");
                    $busca_medicinas = $consulta -> fetchAll(PDO::FETCH_OBJ);
                    //print_r($busca_medicinas);
                    return $busca_medicinas;
                    
    
                }else{
                    $sentencia_especialidad = $this->bd->query("SELECT medicina,estado_medicina FROM medicamentos;");
                    $medicina_cita = $sentencia_especialidad -> fetchAll(PDO::FETCH_OBJ);
                    //print_r($medicina_cita);
                    return $medicina_cita;

                }
        }

        public function set_editar_medicina(){

            $id_medicina = $_POST['txtIDmed'];
            $medicina = $_POST['txtMedicina'];
            $estado = $_POST['txtEstado'];

            $sentencia = $this->bd->prepare("UPDATE medicamentos 
                                SET
                                medicina = ?, 
                                estado_medicina = ?
                                WHERE 
                                id_medicina = ?;");
            $resultado = $sentencia->execute([$medicina,$estado,$id_medicina]);
         

            if($resultado === TRUE){
                print "<script>alert('La medicina se actualizó exitósamente.'); window.location= 'http://localhost/app/view/medicinas_admin_view.php?consulta=&enviar='</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }
        }

        public function set_medicinas(){
          
            $medicamento = $_POST["txtMedicamento"];
            $estado = $_POST["radioOpcion"];

            $sentencia = $this->bd->prepare("INSERT INTO 
            medicamentos (medicina,estado_medicina)
            VALUES (?,?);");
            
            $resultado = $sentencia->execute([$medicamento,$estado]);

            if($resultado === TRUE){
                print "<script>alert('El medicamento se ha registrado exitósamente.'); window.location= 'http://localhost/app/view/medicinas_admin_view.php?consulta=&enviar='</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }
        }

        public function registra_receta(){

            

                
                if(isset($_GET['id_medicina'])){
                //$medicina=$_GET['txtMedicina[]'];
                print "<script>alert('Inténtalo de nuevo.')</script>";
                //print_r($medicina);
                //$consulta = $this->bd->query("SELECT ciudades FROM catalogo;");
                //$busca_medicinas = $consulta -> fetchAll(PDO::FETCH_OBJ);
                //print_r($busca_medicinas);
                //return $busca_medicinas;
                //echo "HOLA";
                }
            


        }
    }
?>