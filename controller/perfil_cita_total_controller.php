<?php 
    
    if(!isset($_GET['id_cita'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
        exit();
    }
    require_once("../model/cita_model.php");

    $consulta_cita=new cita();
    $citas_total=$consulta_cita->get_citas_total();
    
    require_once ("../view/perfil_citas_total_view.php");
?>