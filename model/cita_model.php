<?php
//Modelo de conexión para gestión de cita
    class cita{

        private $bd;
        public function __construct(){
            require_once ("conexion.php");
            $this->bd=conectar::conexion();
        }

        public function reporte_pdf(){

            //$id_cita = $_GET['id_cita'];
            $sentencia_citas = $this->bd->query("SELECT * FROM cita WHERE id_cita='4';");
            $citas_total_pdf = $sentencia_citas -> fetchAll(PDO::FETCH_ASSOC);
            //print_r($citas_total_pdf);
            return $citas_total_pdf;

        }

        public function cancelar_cita(){

            $id_cita = $_GET['id_cita'];
            //print_r($_GET['id_cita']);
            $estado="Cancelado";

            $sentencia = $this->bd->prepare("UPDATE cita 
                                SET
                                estado = ?
                                WHERE 
                                id_cita = ?;");
            $resultado = $sentencia->execute([$estado,$id_cita]);

            $ci = $this->bd->query("SELECT ci_cita FROM cita WHERE id_cita = '$id_cita';");
            print_r($ci);
         

            if($resultado === TRUE){
                print "<script>alert('Su cita se ha registrado exitosamente.'); window.location= 'http://localhost/app/view/perfil_citas_view.php'</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }

        }
        
        public function get_perfil_usuario(){  

            $ci = $_GET['ci'];
            $sentencia = $this->bd->prepare("SELECT persona.ci, CONCAT(persona.nombre,' ', persona.apellido) as paciente FROM persona WHERE persona.ci = ?;");
            $sentencia->execute([$ci]);
            $persona_cita = $sentencia->fetch(PDO::FETCH_OBJ);
            return $persona_cita;
        }
        
       public function get_medico(){  

            $sentencia_medico = $this->bd->query("SELECT CONCAT(persona.nombre,' ', persona.apellido) as medico FROM persona WHERE persona.rol='Médico';");
            $medico = $sentencia_medico -> fetchAll(PDO::FETCH_ASSOC);
            return $medico;
       }

       public function set_cita(){

            $ci = $_POST['txtCedula'];
            $paciente = $_POST['txtPaciente'];
            $sintomas = $_POST['txtSintomas'];
            $especialidad_a = $_POST['txtEspecialidad_b'];
            $medico_a = $_POST['txtMedico_a'];
            $fecha_a = $_POST['txtFecha_a'];
            $hora_a = $_POST['txtHora_a'];
            $hoy = date('Y-m-d');
            $estado = "Pendiente";
            date_default_timezone_set('America/Guayaquil');
            $hora_hoy  = date('H:i:s', time());         

            //VALIDA QUE FECHA U HORA NO SEAN MENORES A LA FECHA ACTUAL PARA REGISTRAR CITA
            if($fecha_a<$hoy || $hora_a<$hora_hoy){
                print "<script>alert('Fecha u hora ingresadas incorrectamente. Por favor intentar nuevamente.'); window.location= 'http://localhost/app/view/cita_formulario_preview.php?ci=".$ci."'</script>";

            }else{
                //print "<script>alert('Yea.')</script>";

                //print_r($fecha_a);
                //print_r($hoy);
                //echo "HOLA";

                $sentencia = $this->bd->prepare("INSERT INTO 
                                                    cita (ci_cita,
                                                    paciente,
                                                    sintomas,
                                                    especialidad_a,
                                                    medico_a,
                                                    fecha_a,
                                                    hora_a,
                                                    estado) 
                                                VALUES (?,?,?,?,?,?,?,?);");
        
                $resultado = $sentencia->execute([$ci,$paciente,$sintomas,$especialidad_a,$medico_a,$fecha_a,$hora_a,$estado]);

                if($resultado === TRUE){
                    print "<script>alert('Su cita se ha registrado exitosamente.'); window.location= 'http://localhost/app/view/perfil_citas_view.php?ci=".$ci."'</script>";
                }else{
                    print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
                exit();
                }
            }                  
        }

        public function get_citas(){

            $ci = $_GET['ci'];
            //print_r($ci);
            $sentencia_citas = $this->bd->query("SELECT * FROM cita WHERE ci_cita='$ci';");
            $citas = $sentencia_citas -> fetchAll(PDO::FETCH_OBJ);
            //print_r($citas);
            return $citas;
            
            //return $citas;

            /*$sentencia_especialidad = $this->bd->query("SELECT nombre_especialidad FROM especialidad;");
            $especalidad = $sentencia_especialidad -> fetchAll(PDO::FETCH_ASSOC);
            return $especalidad;*/

        }

        public function get_citas_total(){

            $id_cita = $_GET['id_cita'];
            //print_r($ci);
            $sentencia_citas = $this->bd->query("SELECT * FROM cita WHERE id_cita='$id_cita';");
            $citas_total = $sentencia_citas -> fetchAll(PDO::FETCH_OBJ);
            //print_r($citas);
            return $citas_total;
            
            //return $citas;

            /*$sentencia_especialidad = $this->bd->query("SELECT nombre_especialidad FROM especialidad;");
            $especalidad = $sentencia_especialidad -> fetchAll(PDO::FETCH_ASSOC);
            return $especalidad;*/

        }

        public function get_citas_doctor(){
            //ci recibe el nombre del doctor
            $nombre_doctor = $_GET['ci'];
            //print_r($ci);
            $sentencia_citas = $this->bd->query("SELECT * FROM cita WHERE medico_a='$nombre_doctor' AND estado='Pendiente';");
            $citas_doctor = $sentencia_citas -> fetchAll(PDO::FETCH_OBJ);
            //print_r($citas);
            return $citas_doctor;
            
            //return $citas;

            /*$sentencia_especialidad = $this->bd->query("SELECT nombre_especialidad FROM especialidad;");
            $especalidad = $sentencia_especialidad -> fetchAll(PDO::FETCH_ASSOC);
            return $especalidad;*/

        }

        public function get_medicos_especialidad(){
            if(isset($_POST['confirmar_especialidad'])):
                $especialidad = $_POST['txtEspecialidad_a'];
                $sentencia_citas = $this->bd->query("SELECT DISTINCT medico FROM medico_especialidad WHERE FIND_IN_SET('$especialidad',especialidad);");
                $medicos_turno = $sentencia_citas -> fetchAll(PDO::FETCH_ASSOC);
                //print_r($medicos_turno);
                return $medicos_turno;
            endif;
        }

        public function get_medicos_turno_dia(){
            if(isset($_POST['txtMedico_a'])):
                $medico = $_POST['txtMedico_a'];
                $sentencia_citas = $this->bd->query("SELECT turno_inicio, turno_fin FROM medico_especialidad WHERE medico='$medico';");
                $horario = $sentencia_citas -> fetchAll(PDO::FETCH_ASSOC);
                
                foreach($horario as $dato){
                    $fechaInicio=$dato['turno_inicio'];
                    $fechaFin=$dato['turno_fin'];
                }

                $fechaInicio = new DateTime($fechaInicio);
                $fechaFin = new DateTime($fechaFin);
                $fechaFin = $fechaFin->modify( '+24 hours' ); 
                
                $rangoFechas = new DatePeriod($fechaInicio, new DateInterval('PT24H'), $fechaFin);

                return $rangoFechas;                

                foreach($rangoFechas as $fecha){
                    $final=$fecha->format('Y-m-d');
                    //print_r($final);
                    //echo gettype($final), "\n";
                    //$sentencia_fecha = $this->bd->prepare("INSERT INTO prueba (doctor,fechas) 
                                                    //VALUES (?,?);");
                    //$resultado_fecha = $sentencia_fecha->execute([$medico,$final]);
                }

                //print_r($final);
            endif;
        }

        public function get_medicos_turno_hora(){
            if(isset($_POST['txtMedico_a'])):
                $medico = $_POST['txtMedico_a'];
                $sentencia_citas = $this->bd->query("SELECT hora_inicio, hora_fin FROM medico_especialidad WHERE medico='$medico';");
                $horario = $sentencia_citas -> fetchAll(PDO::FETCH_ASSOC);

                foreach($horario as $dato){
                    $fechaInicio=$dato['hora_inicio'];
                    $fechaFin=$dato['hora_fin'];
                }

                //$var1 = '08:00';
                //$var2 = '12:00';
                //$intervarlo = '30';
                
                $fechaInicio = new DateTime($fechaInicio);
                $fechaFin = new DateTime($fechaFin);
                //$fechaFin = $fechaFin->modify( '+30 minutes' ); 
                
                $rangoHoras = new DatePeriod($fechaInicio, new DateInterval('PT30M'), $fechaFin);

                return $rangoHoras;
                
                foreach($rangoHoras as $Hora){
                    echo $Hora->format("H:i:s") . PHP_EOL."<br>";
                }
            endif;
        }

        public function get_cita_doctor_editar(){ 

            $id_cita = $_GET['id_cita'];
            $sentencia = $this->bd->query("SELECT * FROM cita WHERE id_cita='$id_cita';");
            $cita_doctor_editar = $sentencia->fetch(PDO::FETCH_OBJ);
            return $cita_doctor_editar;
        }

        public function set_editar_cita_doctor(){

            $id_cita = $_POST['id_cita'];
            //print_r($id_cita);
            $i=0;

            date_default_timezone_set('America/Guayaquil');
            $hora_registro  = date('Y-m-d H:i:s', time());

            foreach ($_POST['txtReceta'] as $dato){
                $array[$i]=$dato;
                $i++;
                $receta = implode(",", $array);
            }

            foreach ($_POST['txtExamen'] as $datos){
                $array_ex[$i]=$datos;
                $i++;
                $examenes = implode(",", $array_ex);
            }

            $doctor = $_POST['txtDoctor'];
            //print_r($doctor);
            $sintomas = $_POST['txtSintomas'];
            $diagnostico = $_POST['txtDiagnostico'];
            $estado = $_POST['radioOpcion'];
            $posologia = $_POST['txtposologia'];

            $sentencia = $this->bd->prepare("UPDATE cita 
                                SET
                                sintomas = ?, 
                                diagnostico = ?, 
                                receta = ?, 
                                posologia = ?,
                                examenes = ?, 
                                estado = ?, 
                                fecha_registro = ?
                                WHERE 
                                id_cita = ?;");
            $resultado = $sentencia->execute([$sintomas,$diagnostico,$receta,$posologia,$examenes,$estado,$hora_registro,$id_cita]);
         

            if($resultado === TRUE){
                print "<script>alert('La atención se ha registrado exitosamente.'); window.location= 'http://localhost/app/view/doctor_citas_view.php?ci=".$doctor."'</script>";
            }else{
                print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
            exit();
            }
        }
    }
?>