<?php 

    if(!isset($_GET['id_medicina'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
        exit();
    }

    require_once("../model/medicinas_model.php");

    $editar_medicina=new medicinas();
    $medicina=$editar_medicina->get_editar_medicina();

    require_once ("../view/editar_medicina_admin_view.php");

?>