<?php 
	require'libreria/fpdf.php';
	// sus parametros son , alineacion de hoja ,sistema de puntuacion(mm,cm) que tiene la hoja ,tamaño de hoja(por defecto es carta)
	$pdf=new FPDF('P','mm','legal');

	$pdf->AddPage();
	// se configura la fuente recibiendo tres parametros , el tipo de letra , estilo(si es negrita , subrayado o italica) y luego tamaño
	$pdf->setFont('Arial','B',15);
	//el contenido del pdf se distribuye en celdas por lo tanto se le deben incluir ciertos parametro como :
	//tamaño (puntos), alto , texto , borde(0 o 1), salto de linea(0 o 1) y alineacion(R , C o L) 
	$pdf->Cell(100,10 ,'Holi',1,0,'C');
	$pdf->Cell(100,10 ,'Holi2',1,1,'C');
	$pdf->Cell(100,10 ,'Holi3',1,1,'C');
	$pdf->Cell(100,10 ,'holaaaaaaa , estudien y preactiquen !!! (se que no lo haran )',1,1,'C');
	//multicelda que se "adapta" al texto que se escriba 
	//tamaño de la celda  (puntos), alto de linea  , texto , borde(0 o 1), alineacion(R , C o L) y fondo(0 o 1)
	$pdf->MultiCell(100,5,'holaaaaaaa , estudien y preactiquen !!! (se que no lo haran )',1,'L',0);
	//posicionamiento de celdas
	//solo afecta a la celda que sigue 
	//atencion: se le debe sumar los puntos de margen que ya estan incorporados
	$pdf->SetX(50);
	$pdf->Cell(100,10 ,'Holi4',1,1,'C');
	$pdf->SetY(100);
	$pdf->Cell(100,10 ,'Holi5',1,1,'C');
	$pdf->SetXY(80,120);
	$pdf->Cell(100,10 ,'Holi6',1,1,'C');
	$pdf->Output();
?>