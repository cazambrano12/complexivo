<?php 

    if(!isset($_POST['ci'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
    }

    require_once("../model/usuarios_model.php");
 
    $conf_editar=new usuarios();
    $editar=$conf_editar->set_editar();

?>