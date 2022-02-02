<?php
//Modelo de conexión para gestión de usuarios
    class usuarios{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function get_total_usuarios(){  
            $sentencia = $this->bd->query("SELECT COUNT(*) as registros FROM persona;");
            $total_usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $total_usuarios;
        }

        public function get_total_medicos(){  
            $sentencia = $this->bd->query("SELECT COUNT(rol) as medicos FROM persona WHERE rol='Médico';");
            $total_medicos = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $total_medicos;
        }

        public function get_total_citas(){  
            $sentencia = $this->bd->query("SELECT COUNT(id_cita) as citas FROM cita;");
            $total_citas = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $total_citas;
        }

        public function get_usuarios_vista(){  
            $sentencia = $this->bd->query("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol WHERE rol.rol='Usuario';");
            $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $persona;
        }
        
        public function get_pacientes_vista(){  
            $sentencia = $this->bd->query("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol WHERE rol.rol='Paciente';");
            $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $persona;
        }
        
        public function get_administradores_vista(){  
            $sentencia = $this->bd->query("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol WHERE rol.rol='Administrador';");
            $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $persona;
        }  
        
        public function get_medicos_vista(){  
            $sentencia = $this->bd->query("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol WHERE rol.rol='Médico';");
            $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $persona;
        }  

        public function get_usuarios_editar(){ 
            $sentencia = $this->bd->query("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol;");
            $persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            $ci = $_GET['ci'];
            $sentencia = $this->bd->prepare("SELECT persona.*,rol.rol FROM persona INNER JOIN rol ON persona.ci=rol.id_rol WHERE ci = ?;");
            $sentencia->execute([$ci]);
            $persona = $sentencia->fetch(PDO::FETCH_OBJ);
            return $persona;
        }

        public function set_editar(){
            $ci = $_POST['txtCedula'];
            $contrasena = md5($_POST['txtPass']);
            $contrasena_rol = md5($_POST['txtPass']);
            $nombre = $_POST['txtNombre'];
            $apellido = $_POST['txtApellido'];
            $email = $_POST['txtEmail'];
            $telefono = $_POST['txtTelefono'];
            $ciudad = $_POST['txtCiudad'];
            $direccion = $_POST['txtDireccion'];
            $fecha = $_POST['txtFecha'];
            $genero = $_POST['radioOpcion'];
            //CALCULA EDAD
            $fecha_nacimiento = new DateTime($_POST["txtFecha"]);
            $hoy = new DateTime();
            $edad = $hoy->diff($fecha_nacimiento);
            echo $edad->y;
            //,$edad->y

            $sentencia = $this->bd->prepare("UPDATE persona 
                                INNER JOIN rol 
                                ON persona.ci=rol.id_rol 
                                SET
                                rol.contrasena_rol = ?, 
                                persona.contrasena = ?, 
                                persona.nombre = ?, 
                                persona.apellido = ?, 
                                persona.email = ?, 
                                persona.telefono = ?, 
                                persona.ciudad = ?, 
                                persona.direccion = ?, 
                                persona.fecha_nacimiento = ?, 
                                persona.genero = ?
                                WHERE 
                                ci = ?;");
            $resultado = $sentencia->execute([$contrasena_rol,$contrasena,$nombre,$apellido,$email,$telefono,$ciudad,$direccion,$fecha,$genero,$ci]);
            if($resultado === TRUE){
                print "<script>alert('Su registro se ha actualizado exitosamente.'); window.location= 'http://localhost/app/view/editar_view.php?ci=".$ci."'</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.'); window.location= 'http://localhost/app/view/editar_view.php?ci=".$ci."'</script>";
            exit();
            }
        }
    
        public function set_eliminar(){

            $codigo = $_GET['ci'];

            $sentencia = $this->bd->prepare("DELETE FROM persona WHERE ci = ?;");
            $sentencia_rol = $this->bd->prepare("DELETE FROM rol WHERE id_rol = ?;");
            $resultado = $sentencia->execute([$codigo]);
            $resultado_rol = $sentencia_rol->execute([$codigo]);

            if($resultado === TRUE && $resultado_rol === TRUE){
                header('Location: mensajes_admin.php?mensaje=eliminado');
            }else{
                header('Location: index.php?mensaje=error');
            }
        }
        
        public function get_formulario(){
            $sentencia = $this->bd -> query("SELECT * FROM persona");
            $formulario = $sentencia -> fetchAll(PDO::FETCH_OBJ);
            return $formulario;
        }

        public function set_formulario(){

            if(empty($_POST["oculto"]) 
                || empty($_POST["txtCedula"])
                || empty($_POST["txtPass"]) 
                || empty($_POST["txtNombre"])
                || empty($_POST["txtApellido"])  
                || empty($_POST["txtEmail"]) 
                || empty($_POST["txtTelefono"])
                || empty($_POST["txtCiudad"])
                || empty($_POST["txtDireccion"])
                || empty($_POST["txtFecha"])
                || empty($_POST["radioOpcion"])
                || empty($_POST["txtRol"])){

                header('Location: mensajes_admin.php?mensaje=falta');
                exit();
            }
    
            //ENCRIPTA CONTRASEÑA
            $password = md5($_POST["txtPass"]);
            //print "$password";

            $ci = $_POST["txtCedula"];
            //$contrasena = $_POST["txtPass"];
            $nombre = $_POST["txtNombre"];
            $apellido = $_POST["txtApellido"];
            $email = $_POST["txtEmail"];
            $telefono = $_POST["txtTelefono"];
            $ciudad = $_POST["txtCiudad"];
            $direccion = $_POST["txtDireccion"];
            $fecha = $_POST["txtFecha"];
            $genero = $_POST["radioOpcion"];
            $rol = $_POST["txtRol"];

            //CALCULA EDAD
            $fecha_nacimiento = new DateTime($_POST["txtFecha"]);
            $hoy = new DateTime();
            $edad = $hoy->diff($fecha_nacimiento);
            //echo $edad->y;
            //,$edad->y

            $sentencia = $this->bd->prepare("INSERT INTO 
                                                persona (ci,
                                                contrasena,
                                                nombre,
                                                apellido,
                                                email,
                                                telefono,
                                                ciudad,
                                                direccion,
                                                fecha_nacimiento,
                                                genero,
                                                rol) 
                                            VALUES (?,?,?,?,?,?,?,?,?,?,?);");
    
            $resultado = $sentencia->execute([$ci,$password,$nombre,$apellido,$email,$telefono,$ciudad,$direccion,$fecha,$genero,$rol]);

            $sentencia_rol = $this->bd->prepare("INSERT INTO rol (id_rol,contrasena_rol,rol) 
                                                    VALUES (?,?,?);");
            
            $resultado_rol = $sentencia_rol->execute([$ci,$password,$rol]);

            //$sentencia_cita = $this->bd->prepare("INSERT INTO cita (ci_cita) VALUES (?);");
                                                    
            
            //$resultado_cita = $sentencia_cita->execute([$ci]);

            if ($resultado == TRUE && $resultado_rol == TRUE) {
                print "<script>alert('Usuario registrado exitósamente.'); window.location= 'http://localhost/app/view/login_view.php'</script>";
                exit();
            } else {
                print "<script>alert('Hubo un error, inténtalo de nuevo.'); window.location= 'http://localhost/app/view/login_view.php'</script>";
                exit();
            }
        }
    }
?>