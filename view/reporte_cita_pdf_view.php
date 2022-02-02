<?php require_once ("../controller/reporte_pdf_controller.php"); ?>
<?php
    //Plantilla para reportes en PDF
    class PDF extends FPDF
    {
    // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('../template/logo.png',4,8,25);
            // Arial bold 15
            $this->SetFont('Arial','B',25);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->Cell(40,20,utf8_decode("Hospital Básico de la Zona El Oro"),0,0,'C');
            // Salto de línea
            $this->Ln(20);
        }

    // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',16);
            // Número de página
            $this->Cell(0,10,utf8_decode('Página').$this->PageNo(),0,0,'C');
        }
    }

    $pdf=new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);

   
    date_default_timezone_set('America/Guayaquil');
    $hora_hoy  = date('m-d-Y H:i:s', time());

    foreach($reporte_pdf as $dato){
  
    }


    $width_cell=array(20,55,55,65);
    $pdf->SetFillColor(193,229,252); 

    $pdf->Cell($width_cell[0],10,'',0,1,'C',false); 
    $pdf->Cell($width_cell[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell[0],10,'Reporte:',1,1,'C',false);  
    $pdf->Cell($width_cell[0],10,'',0,1,'C',false);  
 
    // Header starts /// 
    $pdf->Cell($width_cell[0],10,'ID Cita',1,0,'C',true); 
    $pdf->Cell($width_cell[1],10,'Doctor',1,0,'C',true); 
    $pdf->Cell($width_cell[2],10,'Paciente',1,0,'C',true);
    $pdf->Cell($width_cell[2],10,utf8_decode('Fecha de atención'),1,1,'C',true);  

    //// header is over ///////
    $pdf->SetFont('Arial','',10);
    // First row of data 
    $pdf->Cell($width_cell[0],10,$dato['id_cita'],1,0,'C',false);  
    $pdf->Cell($width_cell[1],10,utf8_decode($dato['medico_a']),1,0,'C',false); 
    $pdf->Cell($width_cell[2],10,utf8_decode($dato['paciente']),1,0,'C',false);
    $pdf->Cell($width_cell[2],10,utf8_decode($dato['fecha_registro']),1,1,'C',false); 
 

    $pdf->Cell($width_cell[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell[0],10,'',0,1,'C',false); 
    //  First row of data is over 

    $pdf->SetFont('Arial','B',12);
    $width_cell_b=array(95,90);
    $pdf->SetFillColor(193,229,252); 

    // Header starts /// 
    $pdf->Cell($width_cell_b[0],10,utf8_decode('Medicamentos'),1,0,'C',true); 
    $pdf->Cell($width_cell_b[1],10,utf8_decode('Posología'),1,1,'C',true); 

    //// header is over ///////
    $pdf->SetFont('Arial','',10);
    // First row of data 
    $pdf->Cell($width_cell_b[0],10,utf8_decode($dato['receta']),1,0,'C',false);  
    $pdf->Cell($width_cell_b[1],10,utf8_decode($dato['posologia']),1,1,'C',false); 
    $pdf->Cell($width_cell_b[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell_b[0],10,'',0,1,'C',false);
    $pdf->Cell($width_cell_b[0],10,'',0,1,'C',false);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($width_cell_b[0],10,'Generado por:',1,0,'C',true); 
    $pdf->Cell($width_cell_b[1],10,utf8_decode('Fecha de generación:'),1,1,'C',true);

    $pdf->SetFont('Arial','',10);
    $pdf->Cell($width_cell_b[0],10,utf8_decode($dato['paciente']),1,0,'C',false);  
    $pdf->Cell($width_cell_b[1],10,$hora_hoy,1,1,'C',false);

    

    



    $pdf->Output();

    

    


?>