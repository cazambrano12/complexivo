<?php 

    if(!isset($_GET['id_medicina'])){
        print "<script>alert('Hubo un error, inténtalo de nuevo .')</script>";
   
    }
    require_once("../model/medicinas_model.php");

    $medicinas=new medicinas();
    $registra_medicinas=$medicinas->registra_receta();

?>