<?php 

    if(!isset($_GET['id_especialidad'])){
        header('Location: mensaje_controller.php?mensaje=error');
        exit();
    }

    require_once("../model/especialidad_model.php");

    $editar_especialidad=new especialidad();
    $especialidad_editar=$editar_especialidad->get_editar_especialidad();

    require_once ("../view/especialidad_editar_view.php");

?>