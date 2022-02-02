<?php 
    require_once("../model/usuarios_model.php");

    $administradores=new usuarios();
    $persona=$administradores->get_administradores_vista();

    require_once ("../view/administradores_view.php");

?>