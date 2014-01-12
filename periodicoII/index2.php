<!doctype html>
<html lang="es">
<head>
   <meta charset="utf­8">
   <title>MONDO DIFFICILE</title>
   <link rel="stylesheet" type="text/css" href="estilo.css" />
   <script type="text/javascript" src="menuEmergente.js"></script>
   <script type="text/javascript" src="validarFormulario.js"></script> 
</head>
<body>
	<section id="bannersuperior"><a href="http://www.amazon.com"> 
  		<img src = "img/amazon.jpg" alt = "Amazon"/> 
	</a></section>
	<section id="bannerizquierdo"><a href="http://www.amarillasinternet.com"> 
  		<img src = "img/banner.jpg" alt = "Amarillas"/> 
	</a></section>
	<section id="bannerderecho"><a href="http://www.amarillasinternet.com"> 
  		<img src = "img/banner.jpg" alt = "Amarillas"/> 
	</a></section>
<header>
	<h1 id="titulo">MONDO DIFFICILE</h1>
	<section id="login">  
                <fieldset>
		<legend>Panel de Control</legend>
		<h2>&iexcl;&iexcl;&iexcl;Bienvenido de nuevo amigo!!!</h2>           
                <form id="formulario" action="formulario3.php" method="post">
                <input type="submit" id = "aceptar" value = "Editar Perfil"/>
                </form></br>
		<form id="logout" action="index.php" method="post">
		<input type="submit" id = "aceptar" value = "Cerrar Sesión"/></form>
                </fieldset>
	</section>
	<nav id="menu">
	<ul>
		<li><a href="index.php" id="color1">Portada</a></li>
		<li><a href="nacional.php" id="color2">Nacional</a></li>
		<li><a href="internacional.php" id="color3">Internacional</a></li>
		<li><a href="economia.php" id="color4">Econom&iacute;a</a></li>
		<li><a href="deportes.php" id="color5">Deportes</a></li>
		<li><a href="tecnologia.php" id="color6">Tecnolog&iacute;a</a></li>
	</ul>
	</nav>

</header>

 <!-- Esta sección pertenece a la parte de la práctica 2 en la que usamos menus emergentes
para mostrar noticias relacionadas al pasar el ratón por los titulares de las noticias de portada --> 

<section id="menuEmergente1" class="ocultarEmergente" >
   <h3>Noticias Relacionadas:</h3>
   <p>- El Bayern humilla al Barcelona</p>
   <p>- Gasol: "Seguir en los Lakers no depende de mí y entiendo la situación"</p>
   <p>- Fernando Alonso: "La pasión de los aficionados es una motivación extra"</p>
   <p>- Dani Pedrosa: "Pese a no lograr la victoria, en Austin recuperé las buenas sensaciones"</p>
</section>

<section id="menuEmergente2" class="ocultarEmergente" >
   <h3>Noticias Relacionadas:</h3>
   <p>- Rubalcaba lamenta que el Día del Trabajo "no sea una celebración" para 6,2 millones de parados </p>
   <p>- El Plan de Reformas prevé recortar 1.108 millones en dependencia y 700 en Sanidad</p>
   <p>- ETA podría estar recibiendo aportaciones voluntarias</p>
   <p>- El Rey reaparece fuera de la Zarzuela para asistir al partido del Real Madrid y el Dortmund</p>
</section>

<section id="menuEmergente3" class="ocultarEmergente" >
   <h3>Noticias Relacionadas:</h3>
   <p>- Maduro culpa de la pelea en la Asamblea Nacional de Venezuela a un plan de la oposición</p>
   <p>- Los forenses no encuentran posibles restos humanos cerca de la 'zona cero'</p>
   <p>- El Gobierno irlandés acepta la amenaza de suicidio de la madre como motivo para abortar</p>
   <p>- EE UU saca a España de la lista de países permisivos con la piratería por segundo año</p>
</section>

<section id="menuEmergente4" class="ocultarEmergente" >
   <h3>Noticias Relacionadas:</h3>
   <p>- La eurozona transfiere el tercer tramo de 16.000 millones al MEDE</p>
   <p>- El Ibex-35 cierra abril con un repunte del 6,3%, el mayor desde agosto de 2012</p>
   <p>- Las acciones de Bankia suben el 190,2% pero sus derechos caen el 87,5% en Bolsa</p>
   <p>- El déficit del Estado hasta marzo cayó un 16% y se sitúa en el 1,63% del PIB</p>
</section>

<section id="menuEmergente5" class="ocultarEmergente" >
   <h3>Noticias Relacionadas:</h3>
   <p>- Crean un guante que convierte el lenguaje de signos en audio</p>
   <p>- Apple emitirá deuda por primera vez en 17 años</p>
   <p>- Detenido en Barcelona el responsable del mayor ciberataque 'DDOS' de la historia</p>
   <p>- El iPhone original será considerado obsoleto y dejará de tener soporte técnico</p>
</section>

<!-- fin de la sección -->

<table id="tabla">
   <tbody>
      <tr>
         <td colspan="2" id="noticia1"><h2 id="color5" onmouseover="mostrarMenuEmergente('menuEmergente1')" onmouseout="ocultarMenuEmergente('menuEmergente1')"><a href="deportes/madrid_decima_20130430.php">LA D&Eacute;CIMA TENDR&Aacute; QUE ESPERAR</a></h2>
		<p>30/04/2013 por Juan.</p>
		<p>Dos goles de Benzema y Ramos en los &uacute;ltimos diez minutos dejaron al Madrid al borde la final de la Champions por tercer a&ntilde;o consecutivo. 
		Pero los tantos llegaron demasiado tarde, en especial si se recuerdan las tres clar&iacute;simas ocasiones que los blancos desperdiciaron en el primer cuarto de hora y 
		que pudieron haber definido un gui&oacute;n de partido totalmente distinto. Pero no; al final fue el mismo de los tres &uacute;ltimos a&ntilde;os.</p>
		<img id="imagen" src = "img/madrid_decima_20130430.jpg" alt = "Portada"/>
		<footer id="pie">Iker Casillas y Sergio Ramos abraz&aacute;ndose.</footer>
	</td>
         <td id="ultimahora"><h3>&Uacute;ltima hora:</h3>
		<div id= "caja">
		<p>Humillante derrota del Barcelona ante el Bayern por 0-3.</p></br>
		<p>Mourinho plantea su salida del Real Madrid a final de temporada.</p></br>
		<p>M&aacute;s de 60 desaparecidos por un derrumbe en un yacimiento de oro en Sud&aacute;n.</p></br>
		<p>Los forenses no encuentran posibles restos humanos cerca de la 'zona cero' de Nueva York.</p></br>
		<p>La eurozona transfiere el tercer tramo de 16.000 millones al MEDE.</p></br>
		<p>Activision muestra el primer v&iacute;deo promocional de Call of Duty: Ghosts.</p></br>
		<p>Reabre el museo Van Gogh de Amsterdam.</p></br>
		<p>S&aacute;enz dice en una carta que su etapa en el Banco Santander ha sido "la mejor" de su vida.</p>
		</td>
		</div>
      </tr>
      <tr>
         <td id="noticia2"><h3 id="color2" onmouseover="mostrarMenuEmergente('menuEmergente2')" onmouseout="ocultarMenuEmergente('menuEmergente2')"><a href="nacional/huelga_1_mayo_20130501.php">Huelga del 1 de mayo</a></h3>
		<p>01/05/2013 por Juan.</p>
		<p>Los sindicatos cifran en 40.000 los asistentes a la marcha en Madrid, encabezada por Ignacio Fern&aacute;ndez Toxo y C&aacute;ndido M&eacute;ndez. 
		Los organizadores cifran en 160.000 los manifestantes en Barcelona, 94.000 en la Comunidad Valenciana, 40.000 en Zaragoza, 12.000 en C&oacute;rdoba...
		Exigen a Rajoy que reconozca el fracaso y el error de su gesti&oacute;n y le han acusado de ser irresponsable y de estar paralizado.</p></td>
         <td id="noticia3"><h3 id="color3" onmouseover="mostrarMenuEmergente('menuEmergente3')" onmouseout="ocultarMenuEmergente('menuEmergente3')"><a href="internacional/eeuu_moderado_crecimiento_20130501.php">EE UU mantiene la pol&iacute;tica de est&iacute;mulo ante el "moderado" crecimiento econ&oacute;mico</a></h3>
		<p>01/05/2013 por Juan.</p>
		<p>Compra de bonos mensuales por 85.000 millones de d&oacute;lares y bajos tipos de inter&eacute;s ante el "moderado" ritmo de crecimiento y la "elevada" tasa de desempleo.
    		El banco central indic&oacute; que la inflaci&oacute;n está "algo por debajo" del objetivo del 2 %.
    		La decisi&oacute;n se produjo por 11 votos a favor y 1 en contra, el de la presidenta.</p></td>
         <td rowspan="2" id="publi"><a href="http://www.skype.com"> 
  		<img src = "img/skype.jpg" alt = "Skype"/></a>
		<a href="http://www.casadellibro.com"> 
  		<img src = "img/casadellibro.gif" alt = "Casa del libro"/></a>
	</td>
      </tr>
      <tr>
         <td id="noticia4"><h3 id="color4" onmouseover="mostrarMenuEmergente('menuEmergente4')" onmouseout="ocultarMenuEmergente('menuEmergente4')"><a href="economia/clase_media_UE_20130430.php">La clase media sufre impuestos de los m&aacute;s altos de la UE, pero Espa&ntilde;a recauda cada vez menos</a></h3>
		<p>01/05/2013 por Juan.</p>
		<p>Economistas, inspectores y t&eacute;cnicos de Hacienda constatan que la crisis fiscal espa&ntilde;ola tiene su origen en una crisis recaudatoria.
		Las subidas de impuestos registradas desde 2010 apenas est&aacute;n surtiendo efecto por la ca&iacute;da de la actividad y los altos niveles de fraude.
		Los analistas reclaman (cada uno a su manera) un cambio profundo en la estructura tributaria de Espa&ntilde;a.</p></td>
         <td id="noticia5"><h3 id="color6" onmouseover="mostrarMenuEmergente('menuEmergente5')" onmouseout="ocultarMenuEmergente('menuEmergente5')"><a href="tecnologia/galaxy_s4_20130427.php">Samsung lanza el 'Galaxy S4', su nuevo y potente 'smartphone'</a></h3>
		<p>01/05/2013 por Juan.</p>
		<p>La compa&ntilde;&iacute;a surcoreana espera ventas superiores a las del modelo anterior.
		El coste del 'Galaxy S4' es de 699 euros.
		Se trata del m&oacute;vil m&aacute;s potente de Samsung, y posee pantalla t&aacute;ctil de 5 pulgadas.
		Dispone de reconocimiento de rostro y voz, y reconoce movimientos sin tocarlo.</p></td>
      </tr>
   </tbody>
</table>

<footer>
	<p>Juan Antonio P&eacute;rez Maldonado </br>
	618042606
	<address>Circunvalaci&oacute;n Encina 23, 18015</address></br>
	<a href="mailto:jpm88@correo.ugr.es">Correo de contacto</a>
	<a href="formulario.php">&iexcl;Suscr&iacute;bete!</a>
	<a href="documentacion.pdf">C&oacute;mo se hizo</a></p>
</footer>
</body>
</html>
