<?php 

    if(!isset($_POST['ci'])){
        header('Location: mensaje_controller.php?mensaje=error');
    }

    require_once("../model/cita_model.php");
 
    $conf_cita=new cita();
    $registrar=$conf_cita->set_cita();

?>