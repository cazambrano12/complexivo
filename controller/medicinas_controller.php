<?php 
    require_once("../model/medicinas_model.php");

    $medicinas=new medicinas();
    $busca_medicinas=$medicinas->get_busqueda();

    require_once ("../view/medicinas_admin_view.php");

?>