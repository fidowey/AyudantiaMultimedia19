/*
Contexto : usaremos una libreria llamada highcharts la cual nos permite graficar datos , estaticos o dinamicos.
Esta la pueden descargar en https://www.highcharts.com/blog/download/ .LA libreria contiene diversos tipos de graficos 
con los que pueden ir provando e intentado cosas ,descarguen la libreria  , revisenla y veran los ejemplos que esta contiene.
En este caso se podran dar cuenta que la libreria funciona con codigo html , javascript y ademas se le puede incorporar cogido PHP
por lo que les permitira trabajar con datos dinamicos.
Se recomienda descargar la libreria y revisarla antes de ver este archivo para asi lograr mayor entendimiento
*/
/*
Empezamos!
*/
<?php 
    $arreglo=array('Manuel','Alejandro','Guillermo','Gertudris','Marlen','Eduardo');
    $i=0;
    //se parte declarando una variable de tipo arreglo con n elemtos y una variable i para luego recorrer el arreglo
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grafico</title>
        //en la siguiente linea se muestra que se puede incorporar bootstrap
        <link rel="stylesheet" href="css/bootstrap.css" >
		<style type="text/css">

		</style>
	</head>
	<body>
        //se llama a los archivos con los cuales se trabajara con los graficos 
        //Cuidado!:el archivo del grafico que se utiliza y se pone como index se debe corregir la direccion con la cual se llamaran al codigo fuente
    <script src="code/highcharts.js"></script>
    <script src="code/modules/exporting.js"></script>
    <script src="code/modules/export-data.js"></script>
    //se llama un navbar para demostrar que se pueden agregar mas fuente de codigo html (bootstrap)
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Graficos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>
//inicio de script donde se llama el grafico 
    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        //hay ciertas partes en donde se puede modificar el codigo , por ejemplo a continuacion tenemos el titulo del grafico
        text: 'Graficos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        //el nombre del grafico 
        name: 'Grafico',
        colorByPoint: true,
        data: [ 
        //se abre otro php en donde se empieza a recorrer el arreglo por el indice i
            <?php 
            //OJO: el while queda abierto  
               while ($i <= 5) {
            ?>
        {//aca se llevan los datos de arreglo al grafico en cada iteracion 
            name: '<?php  echo $arreglo[$i]; ?>',
            y: 1
        }, 
            //se abre otro php para darle el incremento al indice i del arreglo 
            <?php  
               $i=$i + 1;
                } //en esta parte se cierra el while 
            ?>
        ]
    }]
});
		</script>//acaba el script del grafico
        //se llaman a los ultimos scripts de bootstrap
    <script src="js/jquery.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
