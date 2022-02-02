<?php 

    if(!isset($_POST['ci'])){
        header('Location: mensajes_admin.php?mensaje=error');
    }

    require_once("../model/admin_usuarios_model.php");
 
    $conf_editar=new usuarios();
    $editar=$conf_editar->set_editar();

?>