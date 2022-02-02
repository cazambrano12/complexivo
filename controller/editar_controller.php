<?php 

    if(!isset($_GET['ci'])){
        header('Location: mensajes_admin.php?mensaje=error');
        exit();
    }

    require_once("../model/admin_usuarios_model.php");

    $editar_usuario=new usuarios();
    $persona_editar=$editar_usuario->get_usuarios_editar();

    require_once ("../view/editar_user_admin_view.php");

?>