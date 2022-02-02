<?php 

    if(!isset($_GET['ci'])){
        header('Location: mensaje_controller.php?mensaje=error');
        exit();
    }

    require_once("../model/cita_model.php");

    $editar_usuario=new cita();
    $persona=$editar_usuario->get_perfil_usuario();
    
    require_once ("../view/cita_formulario_preview.php");

?>