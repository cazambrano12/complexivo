<?php 
    require_once("../model/usuarios_model.php");

    $usuarios=new usuarios();
    $total_usuarios=$usuarios->get_total_usuarios();

    $medicos=new usuarios();
    $total_medicos=$medicos->get_total_medicos();

    $citas=new usuarios();
    $total_citas=$citas->get_total_citas();

    require_once ("../view/estadisticas_view.php");

?>