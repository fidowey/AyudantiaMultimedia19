<?php 
	//se llama a las funciones de excel que estan en la carpeta classes
	require 'classes/PHPExcel.php';
	//se instancia al objeto 
	$obj=new PHPExcel();
	// se empiezan a crear las propiedades de la hoja excel
	$obj ->getProperties()
	//creador
	->setCreator('Ayudantia')
	//titulo
	->setTitle('generador excel')
	//descripcion
	->setDescription('Estudien y practiquen (se que no lo van a hacer)')
	//palabras coincidentes
	->setKeywords('excel php lorea')
	//categorias
	->setCategory('Ejemplos');
	//pestaña activa
	$obj->setActiveSheetIndex(0);
	//titulo de la primera hoja
	//la funcion getActiveSheet() indica que el contenido se agregara en la hoja activa
	$obj->getActiveSheet()->setTitle('Hoja 1');
	//aca directamente va el contenido 
	// se ponen dos parametros el primero es la celda y luego el contenido
	$obj->getActiveSheet()->setCellValue('A1','Holi');
	$obj->getActiveSheet()->setCellValue('A2',3.14);
	$obj->getActiveSheet()->setCellValue('A3',TRUE);
	$obj->getActiveSheet()->setCellValue('A4',45);
	$obj->getActiveSheet()->setCellValue('A5','=CONCATENATE(A1," ",A2)');
	//se crea encabezado
	//se especifica que es una aplicacion que genera excel
	header('Content-Type: application/vnd.ms-excel');
	//se le da el nombre al archivo
	header('Content-Disposition: attachment;filename="ayudantia.xls"');
	//control de cache
	header ('Cache-Control: max-age=0');
	//funcion de guardado
	// se especifica la salida y la version de excel
	$objWriter= new PHPExcel_Writer_Excel2007($obj);
	$objWriter->save('php://output');
?>