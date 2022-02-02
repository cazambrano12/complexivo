<?php 
    require_once("../model/usuarios_model.php");

    $medicos=new usuarios();
    $persona=$medicos->get_medicos_vista();

    require_once ("../view/medicos_view.php");

?>