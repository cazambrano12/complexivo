<?php include '../template/header_admin.php';?>

<?php

    require_once("../model/admin_usuarios_model.php");
    
    $registro_formulario=new usuarios();
    $registro=$registro_formulario->set_formulario();
 
?>

<?php include '../template/footer_admin.php';?>