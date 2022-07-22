	<!--
		  __^__                                      __^__
         ( ___ )------------------------------------( ___ )
          | / |                                      | \ |
          | / |    HARICODE - HACKATHON 2022         | \ |
          |___|                                      |___|
         (_____)------------------------------------(_____) 

				 ⠄⠄⢀⣀⣤⣤⣴⣶⣶⣶⣶⣶⣶⣶⣶⣶⣶⣤⣤⣄⣀⠄⠄	Carlos Daniel Barrientos Castillo
				 ⠄⠠⣿⢿⣿⢿⣯⣿⣽⢯⣟⡿⣽⢯⣿⣽⣯⣿⣽⣟⣟⣗⠄	José Daniel Man Castellanos
				 ⠄⢸⡻⠟⡚⡛⠚⠺⢟⣿⣗⣿⢽⡿⡻⠇⠓⠓⠓⠫⢷⢳⠄	Andres Fernando Parada Estrada
				 ⠄⢼⡺⡽⣟⡿⣿⣦⡀⡈⣫⣿⡏⠁⢀⣰⣾⢿⣟⢟⢮⢱⡀	Jason Bryan Girón Zamora
				 ⠄⣳⠑⠝⠌⠊⠃⠃⢏⢆⣺⣿⣧⢘⠎⠋⠊⠑⠨⠣⠑⣕⠂	Carlos Enrique Laparra Robledo
				 ⠄⢷⣿⣯⣦⣶⣶⣶⡶⡯⣿⣿⡯⣟⣶⣶⣶⣶⣦⣧⣷⣾⠄
				 ⠄⢹⢻⢯⢟⣟⢿⢯⢿⡽⣯⣿⡯⣗⡿⡽⡯⣟⡯⣟⠯⡻⠂
				 ⠄⠢⡑⡑⠝⠜⣑⣭⠻⢝⠿⡿⡯⠫⠯⣭⣊⠪⢊⠢⢑⠰⠁
				 ⠄⠈⢹⣔⡘⢿⣿⣿⣶⠄⠁⠑⠈⠠⣵⣿⡿⡯⠂⣠⡞⡈⠄
				 ⠄⠄⠨⢻⡆⢄⣀⢩⠄⠄⠴⠕⠄⠄⠈⠉⣀⠠⢢⡟⢌⠄⠄
				 ⠄⠄⠈⠐⡝⣧⠈⡉⡙⢛⠛⠛⠛⠛⢋⠉⡀⡼⠩⡂⠁⠄⠄
				 ⠄⠄⠄⠄⠈⠪⡻⣔⣮⣷⡆⠄⢰⣿⢦⣣⢞⠅⠁⠄⠄⠄⠄
				 ⠄⠄⠄⠄⠄⠄⠈⠓⣷⣿⡅⠄⢸⣿⡗⠇⠁⠄⠄⠄⠄⠄⠄
	-->
<!DOCTYPE html>
<html lang="es-MX">
<head>
<!--ETIQUETAS META-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SECOE</title>
<meta name="description" content="Aplicación web realizada para competencia de Hackathon organizada por ITESO y PARIS21">
<meta name="author" content="http://haricode.com/">
<meta property="og:type" content="Sitio web para ayudar al calentamiento global">
<meta property="og:title" content="Hackathon">
<meta property="og:description" content="plataforma Web o App digital que permita determinar la elegibilidad de la tierra para desarrollar un proyecto de carbono forestal, así como avanzar o lograr que la plataforma pueda estimar la captura y almacenamiento de carbono en el bosque, bajo alguna metodología o estándar público de uso extendido.">
<?php
$url = ruta::ctrRuta();
?>
<!--FIN - ETIQUETAS META-->

<!--ETIQUETAS CSS-->
<link rel="icon" href="<?php echo $url;?>vistas/img/icono.png">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/glider.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/style.css">
<!--FIN - ETIQUETAS CSS-->
</head>

<body>
	<?php
	include "modulos/header.php";

	$ruta = null; 
	$inicio = true; 


	if (isset($_GET["ruta"])) {
		$ruta = $_GET["ruta"];
		if ($ruta == "quienes-somos") {
			include "modulos/quienes-somos.php";
			$inicio = false; 
		}
		else if ($ruta == "ayudemos-al-planeta") {
			include "modulos/app.php";
			$inicio = false; 
		}
		else if ($ruta == "inicio") {
		
			$inicio = true; 
		}
		else if ($ruta == "conoce-mas") {
			
		}
		else if ($ruta == "causas") {
			include 'modulos/causas.php';
			$inicio=false;
		}
		else if ($ruta == "efectos") {
			include 'modulos/efectos.php';
			$inicio=false;
		}
		else if ($ruta == "soluciones") {
			include 'modulos/soluciones.php';
			$inicio=false;
		}
		else{
			include "modulos/error404.php";
			$inicio = false; 
		}
	}

		if ($inicio) {
			include "modulos/inicio.php";
		}
	include "modulos/footer.php";
	?>
</body>

<!--SCROLL MAGIC-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="<?php echo $url;?>vistas/js/menu.js"></script>


<!--ETIQUETAS JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="<?php echo $url;?>vistas/js/glider.js" type="text/javascript"></script>

<script src="<?php echo $url;?>vistas/js/main.js" type="text/javascript"></script>
<!--FIN - ETIQUETAS JS-->

</html>