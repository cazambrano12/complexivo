<?php 
    
    if(!isset($_GET['ci'])){
        header('Location: mensaje_controller.php?mensaje=error');
        exit();
    }
    require_once("../model/cita_model.php");

    $consulta_cita=new cita();
    $citas=$consulta_cita->get_citas();
    
    require_once ("../view/perfil_citas_view.php");
?>