<?php 

    if(!isset($_POST['id_cita'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
    }

    require_once("../model/cita_model.php");
 
    $conf_editar=new cita();
    $editar_cita_doctor=$conf_editar->set_editar_cita_doctor();

?>