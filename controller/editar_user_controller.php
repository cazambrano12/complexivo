<?php 

    if(!isset($_GET['ci'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
        exit();
    }

    require_once("../model/usuarios_model.php");

    $editar_usuario=new usuarios();
    $persona_editar=$editar_usuario->get_usuarios_editar();

    require_once ("../view/editar_view.php");

?>