<?php 

    require_once("../model/especialidad_model.php");

    $especialidad_cita=new especialidad();
    $especialidad=$especialidad_cita->get_nombre_especialidad();
    
    require_once ("../view/cita_formulario_preview.php");

?>