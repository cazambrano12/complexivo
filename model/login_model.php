<?php
//Modelo de conexión para gestión de acceso
    class usuario_login{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_login(){

            if (isset($_POST['oculto'])) {
 
                $ci = $_POST['txtCedula'];
                $password = md5($_POST['txtPass']);
                //print_r($password );
                $rol = $_POST['txtRol'];
             
                $sentencia = $this->bd->query("SELECT id_rol,contrasena_rol,rol FROM rol WHERE id_rol='$ci';");
                $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            
                foreach($persona as $dato){
                    //print_r($dato->contrasena_rol);
         
                    if ($password == $dato->contrasena_rol && $ci == $dato->id_rol && $rol == $dato->rol && $rol == "Paciente") {
                        $sentencia = $this->bd->query("SELECT * FROM persona WHERE ci='$ci';");
                        $login_user = $sentencia -> fetchAll(PDO::FETCH_OBJ);
                        return $login_user;
                  
                                                
                    } else {
                        if ($password == $dato->contrasena_rol && $ci == $dato->id_rol && $rol == $dato->rol && $rol == "Administrador") {
                             
                            print "<script>window.location= 'http://localhost/app/view/estadisticas_view.php?ci=".$ci."'</script>";                                           
                                                    
                        } else {
                            if ($password == $dato->contrasena_rol && $ci == $dato->id_rol && $rol == $dato->rol && $rol == "Médico") {
                                $sentencia = $this->bd->query("SELECT * FROM persona WHERE ci='$ci';");
                                $login_doctor= $sentencia -> fetchAll(PDO::FETCH_OBJ);
                                return $login_doctor;
                                //require_once ("../view/perfil_doctores_view.php");
                                                        
                            } else {
                                if ($password == $dato->contrasena_rol && $ci == $dato->id_rol && $rol == $dato->rol && $rol == "Secretaria") {
                                    header('Location: http://localhost/app/view/usuarios_view.php');                   
                                                            
                                } else {
                                    //echo '<p class="error">Username password combination is wrong!</p>';
                                    print "<script>alert('Usuario, rol o contraseña incorrectos, inténtalo de nuevo.'); window.location= 'http://localhost/app/view/login_view.php'</script>";
                                }
                            }
                        }
                    }  
                }  
            }
        }

        /*public function get_login_doctor(){

            if (isset($_POST['oculto'])) {
 
                $ci = $_POST['txtCedula'];
                $password = $_POST['txtPass'];
                $rol = $_POST['txtRol'];
             
                $sentencia = $this->bd->query("SELECT id_rol,contrasena_rol,rol FROM rol WHERE id_rol='$ci';");
                $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            
                foreach($persona as $dato){

                    if ($password == $dato->contrasena_rol && $ci == $dato->id_rol && $rol == $dato->rol && $rol == "Médico") {
                        $sentencia = $this->bd->query("SELECT * FROM persona WHERE ci='$ci';");
                        $login_doctor = $sentencia -> fetchAll(PDO::FETCH_OBJ);
                        return $login_doctor;
                                                
                    }
                }
            }
        }*/
    }
?>