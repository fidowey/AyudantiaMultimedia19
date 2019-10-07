<?php  
$a=1;
$b=4;
$c=3;
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
if ($a>0) {
	echo "C:";
}else{
	echo ":C";
}
echo"<br>";
 $x1=2;
 $y1=2;
 $x2=-3;
 $y2=-3;
 $distancia1=sqrt($x1*$x1+$y1*$y1);
 $distancia2=sqrt($x2*$x2+$y2*$y2);
 if ($distancia1< $distancia2) {
 	echo "El primer punto esta mas cerca";
 }elseif ($distancia1== $distancia2) {
 	echo "Estan a la misma distancia";
 }else{
 	echo "el segundo punto esta mas cerca";
 }
 ?>