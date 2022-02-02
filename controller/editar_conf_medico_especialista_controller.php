<?php 

    if(!isset($_POST['ci'])){
        header('Location: mensajes_admin.php?mensaje=error');
    }

    require_once("../model/especialidad_model.php");
 
    $conf_editar=new especialidad();
    $editar=$conf_editar->set_medico_especialidad();

?>