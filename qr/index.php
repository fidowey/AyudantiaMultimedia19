<?php 
	require 'phpqrcode/qrlib.php';
	//se crea variable que indica la carpeta donde iran los codigos
	$path='codigos/';
	//se verifica que la carpeta no existe y si no existe , crea la carpeta
	if (!file_exists($path)) {
		mkdir($path);
	}
	//se empieza a configurar el qr
	//se declara el nombre del codigo qr , este debe ir con el formato de imagen (debe ser siempre png)
	$qrname=$path.'ayudantia.png';
	//se le asigna el tamaño a la imagen a crear
	$tamaño=10;
	//precision que se le asigna (baja L,mediana M ,alta Q y maxima H)
	$level='M';
	//marco que tendra el qr (contorno)
	$frameSize=3;
	//contenido de qr
	$conten='ayudantia2019';
	//de la clase qrcode llamo a la funcion png para que lo genere
	//atencion con los parametros deben ir en el mismo orden siguiente 
	QRcode::png($conten, $qrname, $level , $tamaño, $frameSize);
	// se imprime imagen
	echo'<img src="'.$qrname.'"/>';
?>