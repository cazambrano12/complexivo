<?php 
    require_once("../model/admin_usuarios_model.php");

    $formulario_usuarios=new usuarios();
    $formulario=$formulario_usuarios->get_formulario();

    require_once ("../view/formulario_admin_view.php");

?>