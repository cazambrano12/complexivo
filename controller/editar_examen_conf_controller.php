<?php 

    if(!isset($_POST['id_examen'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo.')</script>";
    }

    require_once("../model/examenes_model.php");
 
    $conf_editar=new examenes();
    $editar_examen=$conf_editar->set_editar_examen();

?>