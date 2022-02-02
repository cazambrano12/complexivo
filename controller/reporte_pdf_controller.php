<?php 
    require_once("../model/reporte_pdf_model.php");
    require ('../libraries/fpdf.php"');
    require_once("../model/cita_model.php");

    $genera=new reporte();
    $reporte_pdf=$genera->get_reporte_cita();

    require_once ("../view/reporte_cita_pdf_view.php");

?>