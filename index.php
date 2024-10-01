<?php

$xml = "pano.xml";

if(isset($_GET['rot_x'])){
	$valorParametro = $_GET['rot_x'];
}else{
	$valorParametro = "0";
}
	
	
	
	switch ($valorParametro) {
		case "0":
			$xml = "pano.xml";
			break;
		case "1":
			$xml = "pano1.xml"; //IR A QUIROFANO CON GERMAN OLARTE
			break;
		case "2":
			$xml = "pano2.xml"; //IR AL AULA SARA VICTORIA ALVARADO
			break;
		case "1_1":
			$xml = "pano_sub1_1.xml"; //ADENTRO GERMAN OLARTE (INICIO)
			break;
		case "2_1":
			$xml = "pano_sub2_1.xml"; //ADENTRO SARA VICTORIA ALVARADO (INICIO)
			break;
		case "1_1_1":
			$xml = "pano_sub1_1_1.xml"; //EL COMIENZO DEL CANCER
			break;
		case "1_1_2":
			$xml = "pano_sub1_1_2.xml"; //PERCEPCIONES DISTANCIADAS
			break;
		case "1_1_3":
			$xml = "pano_sub1_1_3.xml"; //ASISTENCIA A PARTO
			break;
		case "1_1_4":
			$xml = "pano_sub1_1_4.xml"; //ENFERMEDAD SOCIAL
			break;
		case "1_1_5":
			$xml = "pano_sub1_1_5.xml"; //SACANDO UTERO
			break;
		case "1_1_6":
			$xml = "pano_sub1_1_6.xml"; //SALVAR LA HUMANIDAD
			break;
		case "1_1_7":
			$xml = "pano_sub1_1_7.xml"; //VISITA TRABAJADORA
			break;
		case "1_1_8":
			$xml = "pano_sub1_1_8.xml"; //Cierre del programa
			break;
		case "1_1_9":
			$xml = "pano_sub1_1_9.xml"; //El hambre
			break;
		case "1_1_10":
			$xml = "pano_sub1_1_10.xml"; //Escuela por la vida
			break;
		case "1_1_11":
			$xml = "pano_sub1_1_11.xml"; //El nacimiento de colpolarte
			break;
		case "1_1_12":
			$xml = "pano_sub1_1_12.xml"; //Historia de un paciente
			break;
		case "1_1_13":
			$xml = "pano_sub1_1_13.xml"; //Baloncesto
			break;
		case "1_1_14":
			$xml = "pano_sub1_1_14.xml"; //Escribamos esa anecdota
			break;
		case "1_1_15":
			$xml = "pano_sub1_1_15.xml"; //Ayudantia
			break;
		case "1_1_16":
			$xml = "pano_sub1_1_16.xml"; //El colpolarte es la luz
			break;
		case "1_1_17":
			$xml = "pano_sub1_1_17.xml"; //Preguntas de la paciente
			break;
		
		
		case "2_1_1":
			$xml = "pano_sub2_1_1.xml"; //Constructores de paz
			break;
		case "2_1_2":
			$xml = "pano_sub2_1_2.xml"; //Casa para los niños
			break;
		case "2_1_3":
			$xml = "pano_sub2_1_3.xml"; //Vida humilde
			break;
		case "2_1_4":
			$xml = "pano_sub2_1_4.xml"; //Cumpleaños obispo
			break;
		case "2_1_5":
			$xml = "pano_sub2_1_5.xml"; //Celebra la vida
			break;
		case "2_1_6":
			$xml = "pano_sub2_1_6.xml"; //Huetamo y fiebre
			break;
		case "2_1_7":
			$xml = "pano_sub2_1_7.xml"; //Dia de muertos
			break;
		case "2_1_8":
			$xml = "pano_sub2_1_8.xml"; //Estar con mis nietas
			break;
		case "2_1_9":
			$xml = "pano_sub2_1_9.xml"; //Apredizaje en el hospital
			break;
		case "2_1_10":
			$xml = "pano_sub2_1_10.xml"; //Pasatiempo lenguazaque
			break;
		case "2_1_11":
			$xml = "pano_sub2_1_11.xml"; //Motricidad
			break;
		case "2_1_12":
			$xml = "pano_sub2_1_12.xml"; //La guitarra
			break;
		case "2_1_13":
			$xml = "pano_sub2_1_13.xml"; //Eramos poetas
			break;
		case "2_1_14":
			$xml = "pano_sub2_1_14.xml"; //hector la cuba
			break;
		case "2_1_15":
			$xml = "pano_sub2_1_15.xml"; //La casona
			break;
		case "2_1_16":
			$xml = "pano_sub2_1_16.xml"; //Trabajo en los ranchos
			break;
		case "2_1_17":
			$xml = "pano_sub2_1_17.xml"; //Travesuras
			break;
		case "2_1_18":
			$xml = "pano_sub2_1_18.xml"; //El matrimonio una locura
			break;
		case "2_1_19":
			$xml = "pano_sub2_1_19.xml"; //Asistencia en cirugias
			break;
		case "2_1_20":
			$xml = "pano_sub2_1_20.xml"; //Proyecto escuela
			break;
		case "2_1_21":
			$xml = "pano_sub2_1_21.xml"; //Promesa de matrimonio
			break;
		case "2_1_22":
			$xml = "pano_sub2_1_22.xml"; //Alacranes
			break;
		case "2_1_23":
			$xml = "pano_sub2_1_23.xml"; //America Latina
			break;
		case "2_1_24":
			$xml = "pano_sub2_1_24.xml"; //Loca del pueblo
			break;
		case "2_1_25":
			$xml = "pano_sub2_1_25.xml"; //Amiga Sunchi
			break;
	
	}
	


//$rotacionHorizontal = "-120";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="mobile-web-app-capable" content="yes" />
		<style type="text/css" title="Default">
			/* fullscreen */
			html {
				height:100%;
			}
			body {
				height:100%;
				margin: 0px;
				overflow:hidden; /* disable scrollbars */
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* remove highlight on tab for iOS/Android */
			}
			/* fix for scroll bars on webkit & >=Mac OS X Lion */ 
			::-webkit-scrollbar {
				background-color: rgba(0,0,0,0.5);
				width: 0.75em;
			}
			::-webkit-scrollbar-thumb {
    			background-color:  rgba(255,255,255,0.5);
			}
		</style>
		<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
		<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
		<script src="https://unpkg.com/aframe-template-component@3.x.x/dist/aframe-template-component.min.js"></script>
		<script src="https://unpkg.com/aframe-layout-component@4.x.x/dist/aframe-layout-component.min.js"></script>
		<script src="https://unpkg.com/aframe-event-set-component@5.x.x/dist/aframe-event-set-component.min.js"></script>
		 <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.jss"></script>
	</head>
	<body>
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
		<script type="text/javascript" src="pano2vr_player.js">
		</script>
		<script src="webxr/three.min.js"></script>
		<script src="webxr/webxr-polyfill.min.js"></script>
		<div id="container" style="width:100%;height:100%;overflow:hidden;">
		<br>Loading...<br><br>
		</div>
		<script type="text/javascript">
			
			// create the panorama player with the container
			pano=new pano2vrPlayer("container");
			// load the configuration
		
			window.addEventListener("load", function() {
			    
				pano.readConfigUrlAsync("<?php echo $xml;?>");	
				
				//pano.moveTo(-60.430, 2.78,170, 0,0,9);
				//pano.stopAutorotate();
				
			});
			if (window.navigator.userAgent.match(/AppleWebKit/i)) {
				// fix for white borders, rotation on iPhone
				function iosHfix(e) {
					window.scrollTo(0, 1);
					var container=document.getElementById("container");
					var oh=container.offsetHeight;
					document.documentElement.style.setProperty('height', '100vh');
					if (oh!=container.offsetHeight) {
						container.style.setProperty('height',"100%");
					} else {
						container.style.setProperty('height',window.innerHeight+"px");
					}
					window.scrollTo(0, 0);
					
					pano.setViewerSize(container.offsetWidth, container.offsetHeight);
					
					
				};
				setTimeout(iosHfix,0);	
				setTimeout(iosHfix,100);	
				window.addEventListener("resize", function() {
					setTimeout(iosHfix,0);
					// hide toolbar on iPad happens with a delay
					setTimeout(iosHfix,500);
					setTimeout(iosHfix,1000);
					setTimeout(iosHfix,2000);
				});
			}
			//setTimeout(function(){pano.activateSound("Element05", 2);}, 500);
			//setTimeout(function(){pano.setMediaVisibility("Element05", 1); pano.activateSound("Element05", 1); }, 500);
		</script>
		<noscript>
			<p><b>Please enable Javascript!</b></p>
		</noscript>
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - --> 
	</body>
</html>
