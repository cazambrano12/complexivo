<?php include '../template/header_admin.php';?>

<?php

    require_once("../model/medicinas_model.php");
    $registro_formulario=new medicinas();
    $registro=$registro_formulario->set_medicinas();
 
?>

<?php include '../template/footer_admin.php';?>