<?php

    if(!isset($_POST['id_especialidad'])){
        header('Location: mensajes_admin.php?mensaje=error');
    }

    require_once("../model/especialidad_model.php");

    $especialidad_editar=new especialidad();
    $editar=$especialidad_editar->set_editar_especialidad();

?>