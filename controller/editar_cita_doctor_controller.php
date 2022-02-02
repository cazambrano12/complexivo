<?php 

    if(!isset($_GET['id_cita'])){
        header('Location: mensajes_admin.php?mensaje=error');
        exit();
    }

    require_once("../model/cita_model.php");

    $editar_cita=new cita();
    $cita_doctor_editar=$editar_cita->get_cita_doctor_editar();
    //print_r($cita_doctor_editar);

    require_once ("../view/editar_cita_doctor_view.php");

?>