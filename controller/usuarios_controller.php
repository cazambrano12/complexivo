<?php 
    require_once("../model/admin_usuarios_model.php");

    $usuarios=new usuarios();
    $persona=$usuarios->get_usuarios_vista();

    require_once ("../view/usuarios_view.php");

?>