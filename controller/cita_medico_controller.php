<?php 

    require_once("../model/cita_model.php");

    $medico_cita=new cita();
    $medico=$medico_cita->get_medico();
    
    require_once ("../view/cita_formulario_view.php");

?>