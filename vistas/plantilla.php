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
<link href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.css" rel="stylesheet" />
<link rel="icon" href="<?php echo $url;?>vistas/img/icono.png">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/glider.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/css/style.css">
<link rel="stylesheet" href="<?php echo $url;?>vistas/css/conocer-mas.css" />
<!--FIN - ETIQUETAS CSS-->
</head>

<body onload="GetMap()">
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
			include "modulos/conoce-mas.php";
			$inicio = false; 
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

<!--Azure Maps -->
<script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>
<script>
	var map, map2;
	
	function GetMap() {
		map = new atlas.Map("mapa-clima",{
			center: [-103.5, 20.5],
        	zoom: 7,
			view: 'Auto',
			style: 'grayscale_dark',
			
			authOptions: {
				authType: 'subscriptionKey',
				subscriptionKey: '7t33LOdChDI0nOAZAGK1VjAZ-qHnkXOrA-Awzpn8k5A',
				getToken: function (resolve, reject, map) {
                        //URL to your authentication service that retrieves an Azure Active Directory Token.
                        var tokenServiceUrl = "https://samples.azuremaps.com/api/GetAzureMapsToken";

                        fetch(tokenServiceUrl).then(r => r.text()).then(token => resolve(token));
                    }
			}
		})

		map.events.add('ready', function (){
			tileLayer = new atlas.layer.TileLayer({
                    tileUrl: 'https://atlas.microsoft.com/map/tile?zoom={z}&x={x}&y={y}&api-version=2.1&tilesetId=microsoft.weather.infrared.main&subscription-key=7t33LOdChDI0nOAZAGK1VjAZ-qHnkXOrA-Awzpn8k5A',
                    opacity: 0.5,
                    tileSize: 256
                });

                map.layers.add(tileLayer);
		})


		map2 = new atlas.Map("mapa-relieve",{
			center: [-103.5, 20.5],
        	zoom: 7,
			style: 'grayscale_light',
			view: 'Auto',
			authOptions: {
				authType: 'subscriptionKey',
				subscriptionKey: '7t33LOdChDI0nOAZAGK1VjAZ-qHnkXOrA-Awzpn8k5A'
			}
		});

		map2.events.add('ready', function () {
			datasource = new atlas.source.DataSource();
			map2.sources.add(datasource);

			datasource.add([
                    new atlas.data.Feature(new atlas.data.Point([-102.9,19.7]), {
                        name: 'Point 1 Title',
                        description: 'This is the description 1.'
                    })
                ]);

			//Add a layer for rendering point data as symbols.
			symbolLayer = new atlas.layer.SymbolLayer(datasource, null, { iconOptions: {allowOverlap: true}});
			map2.layers.add(symbolLayer);

			//Create a popup but leave it closed so we can update it and display it later.
			popup = new atlas.Popup({
				position: [0, 0],
				pixelOffset: [0, -18]
			});

			map2.events.add('mousemove', closePopup);

			/**
			 * Open the popup on mouse move or touchstart on the symbol layer.
			 * Mouse move is used as mouseover only fires when the mouse initially goes over a symbol. 
			 * If two symbols overlap, moving the mouse from one to the other won't trigger the event for the new shape as the mouse is still over the layer.
			 */
			map2.events.add('mousemove', symbolLayer, symbolHovered);
			map2.events.add('touchstart', symbolLayer, symbolHovered);
		});

		
	}

	function closePopup() {
		popup.close();
	}
	
	function symbolHovered(e) {
		//Make sure the event occurred on a shape feature.
		if (e.shapes && e.shapes.length > 0) {
			var properties = e.shapes[0].getProperties();

			//Update the content and position of the popup.
			popup.setOptions({
				//Create the content of the popup.
				content: `<div style="padding:10px; color:#000000;"><b>${properties.name}</b><br/>${properties.description}</div>`,
				position: e.shapes[0].getCoordinates(),
				pixelOffset: [0, -18]
			});

			//Open the popup.
			popup.open(map2);
		}
	}

</script>

<!--ETIQUETAS JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="<?php echo $url;?>vistas/js/glider.js" type="text/javascript"></script>
<script src="<?php echo $url;?>vistas/js/app.js" type="text/javascript"></script>
<script src="<?php echo $url;?>vistas/js/main.js" type="text/javascript"></script>
<!--FIN - ETIQUETAS JS-->

</html>