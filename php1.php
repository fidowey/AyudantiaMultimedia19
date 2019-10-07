<?php 
//variables
$num=-32;
$texto ="Hola ayudantia";
$float=3.14;
$fecha=date("d/m/y");
$animales = array("Gato", "Perro", "Laucha", "Nutria");
//Impresiones por pantalla
echo $texto ."<br>";
echo $num ."<br>".$fecha ;
echo '<br> $texto';
echo "<br>$texto";
echo"<br>";
print $texto."Como estan ?";
echo"<br>";
print "$texto Como estan ?";
echo"<br>";
//comentario de linea simple
/*
 comentario de lineas variadas 
*/

/*

operadores:
+:suma
-:resta
*:multiplicacion
/:division
%:modulo
 == :compara si ambos valores son iguales 
 ===:compara si los valores son iguales y ,ademas , son del mismo dato 
 !=	, <> =distinto de 
 !== : compara si dos valores no son identicos ,osea , si no son el mismo valor o si son de distinto tipo 
 >:mayor que 	
< : menor que 	
>= : mayor o igual 
<=:menor o igual
$var++ :incrementa en 1 unidad
$var-- : decrementa una unidad 
&&:operador and 
||:operador or 
*/

//valor absoluto
$num2=-54;
$val=abs($num2);
echo "<br> $val <br>";

//exponente (forma 1)
$num3=6;
$exp=pow($num3,9);// primero se indica la base y luego el exponente
echo $exp; 
echo"<br>";
// exponente (forma 2)
$num4=6;
$num5=7;
$exp2=$num4 **$num5;
echo $exp2; 

echo"<br>";
//raiz cuadrada
$num7=36;
$raiz=sqrt($num7);
echo $raiz; 
echo"<br>";
// if

$alumnos=5;
if ($alumnos==20){
	echo "Han venido todos los alumnos";
}elseif ($alumnos < 20 && $alumnos>=10 ) {
	echo "Casi";
}else {
	echo "No paso nah";
}

echo"<br>";

$x=1;
$y=1;
if ($x===$y){
	echo "Son identicos";
}else {
	echo "No son identicos";
}
echo"<br>";
//switch case 
$dia="miercoles";
switch ($dia) {
	case "lunes":
		echo "tu dia favorito es lunes <br>";
		break;
	case "martes":
		echo "tu dia favorito es martes <br>";
		break;
	case "miercoles":
		echo "tu dia favorito es miercoles <br>";
		break;
	case "jueves":
		echo "tu dia favorito es jueves <br>";
		break;
	case "viernes":
		echo "tu dia favorito es viernes <br>";
		break;
	case "sabado":
		echo "tu dia favorito es sabado <br>";
		break;
	default:
		echo "tu dia favorito es domingo ";
		break;
}
echo"<br>";

//for 
$num6=3;
for ($num6; $num6 <= 15; $num6++) {
    echo "El numero es: $num6 <br>";
}
echo"<br>";

//for each
//toma cada elemento del arreglo y lo guarda en la siguiente variable "alumno"y lo va mostrando en cada iteracion hasta que recorra totalmente el arreglo 

$presentes = array("Jose", "Miguel", "Mario", "Juan");

foreach ($presentes as $alumno) {
    echo "$alumno <br>";
}







































//tarea :programar ecuacion de segundo grado , mostrar sus raices(soluciones ) e indicar si la funcion es concava o convexa (si es + o -)y comparar dos distancias de un punto al origen y comparar cual esta mas cerca 
 ?>
 