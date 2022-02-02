<?php 
    require_once("../model/medicinas_model.php");

    $medicinas=new medicinas();
    $busca_medicinas=$medicinas->get_nombre_medicina();

    require_once ("../view/editar_cita_doctor_view.php");

?>