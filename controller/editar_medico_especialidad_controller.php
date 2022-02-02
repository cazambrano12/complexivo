<?php 

    if(!isset($_GET['ci'])){
        header('Location: mensajes_admin.php?mensaje=error');
        exit();
    }

    require_once("../model/especialidad_model.php");

    $editar_medico_especialidad=new especialidad();
    $medico_especialidad_editar=$editar_medico_especialidad->get_medicos_especialidad_editar();
    $especialidad=$editar_medico_especialidad->get_nombre_especialidad();

    require_once ("../view/editar_medico_especialidad_admin_view.php");

?>