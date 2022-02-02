<?php 
    require_once("../model/examenes_model.php");

    $examenes=new examenes();
    $medicina_examen=$examenes->get_nombre_examen();

    require_once ("../view/editar_cita_doctor_view.php");

?>