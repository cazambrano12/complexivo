<?php 
    require_once("../model/login_model.php");

    $login_usuario=new usuario_login();
    $login_user=$login_usuario->get_login();
    
    require_once ("../view/perfil_usuarios_view.php");
?>