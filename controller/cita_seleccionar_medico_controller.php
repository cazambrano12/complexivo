<?php 

    require_once("../model/cita_model.php");

    $especialidad_medico=new cita();
    $medicos_turno=$especialidad_medico->get_medicos_especialidad();
    $rangoFechas=$especialidad_medico->get_medicos_turno_dia();
    $rangoHoras=$especialidad_medico->get_medicos_turno_hora();

?>