<?php
//Funciones

function funcion(){
	echo "bienvenidos a ayudantia";
}
echo "Buena cabros ";
funcion();
echo"<br>";
//Funcion con entrada de  un parametro

function funcion2($alumnos){
	if ($alumnos==20){
		echo "Han venido todos los alumnos";
	}elseif ($alumnos < 20 && $alumnos>=10 ) {
		echo "Casi";
	}else {
		echo "No paso nah";
	}
}
funcion2(12); 

echo"<br>";
// Funcion con entrada de multiples parametros
function funcion3($a,$b,$c){//notar que los parametros de entrada van separados por coma 
	$discriminante=pow($b, 2) - 4*$a*$c;
	$semiresultado=sqrt($discriminante);
	$resultado1 = (-$b +$semiresultado)/2*$a;
	$resultado2 = (-$b -$semiresultado)/2*$a;
	if($discriminante >= 0){
		echo "la raiz 1 de la ecuacion es $resultado1<br>";
		echo "la raiz 2 de la ecuacion es $resultado2<br>";
	}
	else
	{
		echo "la ecuacion no tiene solucion en los reales<br> ";
 	}
}

funcion3(2,3,4);
echo"<br>";

//Funcion con valor por default
function funcion4($num1,$num2=1){
	$division=$num1/$num2;
	echo "el resultado es : $division";
}
funcion4(15);//Los valores por default hace que NO sea necesario introducir un valor de esa variable 

echo"<br>";


//Funcion recursiva

function funcion6($valor){
	if ($valor<=10) {
		echo "$valor";
		echo"<br>";
		funcion6(++$valor);
	}
}
funcion6(0);

echo"<br>";
//funcion con return
function funcion7($num1,$num2){
	$operacion=$num1+$num2;
	return $operacion;// devuelve abruptamente la variable de salida y detiene la ejecucion de la funcion volviendo a la linea en que fue llamada la funcion , no se pueden llamar mas de una vez el return
}
echo funcion7(15,5);

echo"<br>";

//ejercicio : hacer funcionque haga operaciones sucesivasde dos valores 





function calculos_sucesivos ( $a , $b)
{
	$resultado=$a+$b;
	$resultado=$resultado*$b;
	$resultado=$resultado/$a;
	$resultado=sqrt($resultado);
	$resultado=pow($resultado, pow($a, $b));
	return $resultado;
}
echo "el resultado de calculos sucesivos es = " .calculos_sucesivos (2,3);





//Archivos 
/*
'r'	Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero.
'r+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero.
'w'	Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
'w+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
'a'	Apertura para sólo escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() solamente afecta a la posición de lectura; las lecturas siempre son pospuestas.
'a+'	Apertura para lectura y escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() no tiene efecto, las escrituras siempre son pospuestas.
'x'	Creación y apertura para sólo escritura; coloca el puntero del fichero al principio del mismo. Si el fichero ya existe, la llamada a fopen() fallará devolviendo FALSE y generando un error de nivel E_WARNING. Si el fichero no existe se intenta crear. Esto es equivalente a especificar las banderas O_EXCL|O_CREAT para la llamada al sistema de open(2) subyacente.
'x+'	Creación y apertura para lectura y escritura; de otro modo tiene el mismo comportamiento que 'x'.
'c'	Abrir el fichero para sólo escritura. Si el fichero no existe, se crea. Si existe no es truncado (a diferencia de 'w'), ni la llamada a esta función falla (como en el caso con 'x'). El puntero al fichero se posiciona en el principio del fichero. Esto puede ser útil si se desea obtener un bloqueo asistido (véase flock()) antes de intentar modificar el fichero, ya que al usar 'w' se podría truncar el fichero antes de haber obtenido el bloqueo (si se desea truncar el fichero, se puede usar ftruncate() después de solicitar el bloqueo).
'c+'	Abrir el fichero para lectura y escritura; de otro modo tiene el mismo comportamiento que 'c'.
'e'	Establecer la bandera 'close-on-exec' en el descriptor de fichero abierto. Disponible solamente en PHP compilado en sistemas que se ajustan a POSIX.1-2008.
*/

$nombre="ewardo";
$nombrearch=$nombre.".html";
$vari= "klsgndmf knf, dfjk,df.hncñljajijuji ";
$var2=fopen($nombrearch, 'w');
fputs($var2 , $vari);

$var2=fopen($nombrearch, 'r');
echo fread($var2, 200);
fclose($var2);




















//tarea:programar con archivos un editor de pagina estilo "wix" el cual deben pasar a traves de un formulario :Titulo de una pagina , texto de la pagina , color de fondo , y color de letras 
?>