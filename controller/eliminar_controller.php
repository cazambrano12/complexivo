<?php
    
    if(!isset($_GET['ci'])){
        header('Location: mensajes_admin.php?mensaje=error');
        exit();
    }

    require_once("../model/admin_usuarios_model.php");

    $eliminar_usuario=new usuarios();
    $eliminar=$eliminar_usuario->set_eliminar();

?>