<?php 
    
    if(!isset($_GET['ci'])){
        header('Location: mensaje_controller.php?mensaje=error');
        exit();
    }
    require_once("../model/cita_model.php");

    $consulta_cita=new cita();
    $citas_doctor=$consulta_cita->get_citas_doctor();
    
    require_once ("../view/doctor_citas_view.php");
?>