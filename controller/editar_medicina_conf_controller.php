<?php 

    if(!isset($_POST['id_medicina'])){
        header('Location: mensajes_admin.php?mensaje=error');
    }

    require_once("../model/medicinas_model.php");
 
    $conf_editar=new medicinas();
    $editar_medicina=$conf_editar->set_editar_medicina();

?>