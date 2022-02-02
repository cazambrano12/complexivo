<?php 


    require_once("../model/medicos_especialidad_model.php");

    $turno=new medicos_especialidad();
    $turno_medico=$turno->get_medicos_especialidad();

    require_once ("../view/turnos_medicos_view.php");

?>