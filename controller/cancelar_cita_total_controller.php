<?php 
    
    if(!isset($_GET['id_cita'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
        exit();
    }
    require_once("../model/cita_model.php");

    $cancelar=new cita();
    $cancelar_cita=$cancelar->cancelar_cita();
    
?>