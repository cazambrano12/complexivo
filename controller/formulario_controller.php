<?php 
    require_once("../model/usuarios_model.php");

    $formulario_usuarios=new usuarios();
    $formulario=$formulario_usuarios->get_formulario();

    require_once ("../view/formulario_view.php");

?>