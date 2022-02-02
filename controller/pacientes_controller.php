<?php 
    require_once("../model/usuarios_model.php");

    $pacientes=new usuarios();
    $persona=$pacientes->get_pacientes_vista();

    require_once ("../view/pacientes_view.php");

?>