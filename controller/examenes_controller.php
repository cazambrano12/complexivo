<?php 
    require_once("../model/examenes_model.php");

    $examen=new examenes();
    $busca_examen=$examen->get_busqueda();

    require_once ("../view/examenes_admin_view.php");

?>