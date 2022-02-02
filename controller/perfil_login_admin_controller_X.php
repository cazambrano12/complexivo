<?php 
    require_once("../model/login_model.php");

    $login_usuario=new usuario_login();
    $login=$login_usuario->get_login();
        
?>