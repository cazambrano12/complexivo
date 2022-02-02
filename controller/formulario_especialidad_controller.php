<?php 
    require_once("../model/especialidad_model.php");

    $especialidad_vista=new especialidad();
    $especialidad=$especialidad_vista->get_especialidad();

    require_once ("../view/formulario_especialidad_view.php");

?>