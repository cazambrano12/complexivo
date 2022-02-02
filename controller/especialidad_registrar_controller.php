<?php include '../template/header_admin.php';?>

<?php

    require_once("../model/especialidad_model.php");
    $registro_formulario=new especialidad();
    $registro=$registro_formulario->set_especialidad();
 
?>

<?php include '../template/footer_admin.php';?>