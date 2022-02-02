<?php 
    require_once("../model/login_model.php");

    $login_usuarios=new usuario_login();
    $login=$login_usuarios->get_login();

    require_once ("../view/login_view.php");

?>