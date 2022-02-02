<?php include '../template/header_admin.php';?>

<?php

    require_once("../model/examenes_model.php");
    $registro_formulario=new examenes();
    $registro=$registro_formulario->set_examenes();
 
?>

<?php include '../template/footer_admin.php';?>