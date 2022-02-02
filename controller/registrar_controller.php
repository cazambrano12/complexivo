<?php include '../template/header_view.php';?>

<?php

    require_once("../model/usuarios_model.php");
    
    $registro_formulario=new usuarios();
    $registro=$registro_formulario->set_formulario();
 
?>

<?php include '../template/footer.php';?>