<?php 

    if(!isset($_GET['id_examen'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
        exit();
    }

    require_once("../model/examenes_model.php");

    $editar_examen=new examenes();
    $examen=$editar_examen->get_editar_examen();

    require_once ("../view/editar_examen_admin_view.php");

?>